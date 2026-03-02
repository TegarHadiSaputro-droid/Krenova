<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chat-ai.css?v=3">
</head>
<body>

<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="brand">
            <div class="brand-icon">
                <img src="{{ asset('tunawoi.png') }}" style="width:100%;height:100%;border-radius:8px;object-fit:cover;">
            </div>
            <span class="brand-name">Trixie AI</span>
        </div>
        <button class="btn-new-chat" onclick="newChat()">
            <span class="plus-icon">+</span>
            Obrolan Baru
        </button>
    </div>

    <div id="historyList"></div>

    <div class="sidebar-footer">
        <div class="user-avatar">U</div>
        <span>User</span>
    </div>
</aside>

<!-- Main -->
<main class="main">
    <div class="mobile-header">
        <button class="hamburger" onclick="openSidebar()">
            <span></span><span></span><span></span>
        </button>
        <span style="font-size:14px;font-weight:600;">Trixie AI</span>
    </div>

    <div class="chat-area" id="chatArea">
        <div class="welcome" id="welcomeScreen">
            <div class="welcome-icon">
                <img src="{{ asset('tunawoi.png') }}" alt="" style="width:100%;height:100%;border-radius:16px;object-fit:cover;">
            </div>
            <h1>Ada yang bisa saya bantu?</h1>
            <p>Tanyakan apa saja, saya siap membantu kamu.</p>
        </div>

        <div class="messages" id="messages"></div>
    </div>

    <div class="input-wrapper">
        <div class="input-container">
            <textarea
                id="messageInput"
                placeholder="Kirim pesan..."
                rows="1"
                oninput="autoResize(this)"
            ></textarea>
            <div class="input-actions">
                <input type="file" id="imageInput" accept="image/*" style="display:none" onchange="handleImageUpload(this)">
                <button type="button" class="btn-upload" onclick="document.getElementById('imageInput').click()">📎</button>
                <button class="btn-send" id="sendBtn" onclick="sendMessage()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="19" x2="12" y2="5"></line>
                        <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    // Simpan URL gambar agar bisa dipakai di JavaScript
    const tunaImg = "{{ asset('tunawoi.png') }}";

    const messagesEl = document.getElementById('messages');
    const welcomeEl = document.getElementById('welcomeScreen');
    const inputEl = document.getElementById('messageInput');
    const sendBtn = document.getElementById('sendBtn');
    const chatArea = document.getElementById('chatArea');

    let isLoading = false;
    let uploadedImage = null;

    function autoResize(el) {
        el.style.height = 'auto';
        el.style.height = Math.min(el.scrollHeight, 160) + 'px';
        el.style.overflowY = el.scrollHeight > 160 ? 'auto' : 'hidden';
    }

    inputEl.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    });

    function escapeHtml(text) {
        return text
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    function addMessage(role, text) {
        welcomeEl.style.display = 'none';
        messagesEl.classList.add('has-messages');

        const div = document.createElement('div');
        div.className = 'message';
        const isUser = role === 'user';
        div.innerHTML = `
            <div class="msg-avatar ${isUser ? 'user' : 'ai'}">
                ${isUser ? 'U' : `<img src="${tunaImg}" style="width:100%;height:100%;border-radius:8px;object-fit:cover;">`}
            </div>
            <div class="msg-content">
                <div class="msg-role">${isUser ? 'Kamu' : 'Trixie AI'}</div>
                <div class="msg-text">${escapeHtml(text)}</div>
            </div>
        `;
        messagesEl.appendChild(div);
        scrollToBottom();
    }

    function addMessageWithImage(role, text, imageSrc) {
        welcomeEl.style.display = 'none';
        messagesEl.classList.add('has-messages');

        const div = document.createElement('div');
        div.className = 'message';
        div.innerHTML = `
            <div class="msg-avatar user">U</div>
            <div class="msg-content">
                <div class="msg-role">Kamu</div>
                <img src="${imageSrc}" style="width:200px;border-radius:8px;margin-bottom:8px;display:block;">
                <div class="msg-text">${escapeHtml(text)}</div>
            </div>
        `;
        messagesEl.appendChild(div);
        scrollToBottom();
    }

    function addTyping() {
        welcomeEl.style.display = 'none';
        messagesEl.classList.add('has-messages');
        const div = document.createElement('div');
        div.className = 'message';
        div.id = 'typingIndicator';
        div.innerHTML = `
            <div class="msg-avatar ai">
                <img src="${tunaImg}" style="width:100%;height:100%;border-radius:8px;object-fit:cover;">
            </div>
            <div class="msg-content">
                <div class="msg-role">Trixie AI</div>
                <div class="typing"><span></span><span></span><span></span></div>
            </div>
        `;
        messagesEl.appendChild(div);
        scrollToBottom();
    }

    function removeTyping() {
        const el = document.getElementById('typingIndicator');
        if (el) el.remove();
    }

    function scrollToBottom() { chatArea.scrollTop = chatArea.scrollHeight; }

    function handleImageUpload(input) {
        const file = input.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(e) {
            uploadedImage = e.target.result;
            showImagePreview(e.target.result);
        };
        reader.readAsDataURL(file);
    }

    function showImagePreview(src) {
        const oldPreview = document.getElementById('imagePreview');
        if (oldPreview) oldPreview.remove();

        const preview = document.createElement('div');
        preview.id = 'imagePreview';
        preview.style.cssText = 'padding:8px 0;display:flex;align-items:center;gap:8px;';
        preview.innerHTML = `
            <img src="${src}" style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
            <button onclick="removeImage()" style="background:none;border:none;color:#888;cursor:pointer;font-size:18px;">✕</button>
        `;
        document.querySelector('.input-container').prepend(preview);
    }

    function removeImage() {
        uploadedImage = null;
        const preview = document.getElementById('imagePreview');
        if (preview) preview.remove();
        document.getElementById('imageInput').value = '';
    }

    async function sendMessage() {
        const message = inputEl.value.trim();
        if ((!message && !uploadedImage) || isLoading) return;

        isLoading = true;
        sendBtn.disabled = true;

        const userMessage = message || 'Analisis gambar ini';
        inputEl.value = '';
        inputEl.style.height = 'auto';

        if (uploadedImage) {
            addMessageWithImage('user', userMessage, uploadedImage);
        } else {
            addMessage('user', userMessage);
        }

        const imageToSend = uploadedImage;
        removeImage();
        addTyping();

        try {
            const res = await fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message: userMessage, image: imageToSend })
            });

            const data = await res.json();
            removeTyping();
            const reply = data.reply || data.error?.message || 'Maaf, terjadi kesalahan.';
            addMessage('ai', reply);
            loadHistory();

        } catch (err) {
            removeTyping();
            addMessage('ai', 'Maaf, terjadi kesalahan koneksi. Coba lagi.');
        } finally {
            isLoading = false;
            sendBtn.disabled = false;
            inputEl.focus();
        }
    }

    async function newChat() {
        await fetch('/chat/new', {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
        });

        messagesEl.innerHTML = '';
        messagesEl.classList.remove('has-messages');
        welcomeEl.style.display = '';
        inputEl.value = '';
        inputEl.style.height = 'auto';
        inputEl.focus();
        closeSidebar();
        loadHistory();
    }

    async function selectChat(id) {
    try {
        const res = await fetch(`/chat/load/${id}`, {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
        });

        const data = await res.json();
        if (data.status !== 'ok') return;

        // Kosongkan chat area
        messagesEl.innerHTML = '';
        messagesEl.classList.add('has-messages');
        welcomeEl.style.display = 'none';

        // Tampilkan pesan dari sesi yang dipilih
        const messages = data.messages || [];
        messages.forEach(m => {
            if (m.role === 'system') return;

            const role = m.role === 'user' ? 'user' : 'ai';
            const content = typeof m.content === 'string'
                ? m.content
                : (Array.isArray(m.content) ? (m.content.find(c => c.type === 'text')?.text || '') : '');

            addMessage(role, content);
        });
    } catch (err) {
        console.error(err);
    }
}

        loadHistory();
        closeSidebar();

    async function deleteChat(e, id) {
    e.stopPropagation();
    if (!confirm('Hapus percakapan ini?')) return;

    await fetch(`/chat/${id}`, {
        method: 'DELETE',
        headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
    });

    // Jika yang dihapus sedang aktif, reset tampilan
    messagesEl.innerHTML = '';
    messagesEl.classList.remove('has-messages');
    welcomeEl.style.display = '';

    loadHistory();
}

    function groupByDate(sessions) {
        const now = new Date();
        const today = now.toDateString();
        const yesterday = new Date(now - 86400000).toDateString();
        const thirtyDaysAgo = new Date(now - 30 * 86400000);
        const groups = { 'Hari Ini': [], 'Kemarin': [], '30 Hari': [], 'Lebih Lama': [] };

        sessions.forEach(s => {
            const date = new Date(s.createdAt).toDateString();
            if (date === today) groups['Hari Ini'].push(s);
            else if (date === yesterday) groups['Kemarin'].push(s);
            else if (new Date(s.createdAt) >= thirtyDaysAgo) groups['30 Hari'].push(s);
            else groups['Lebih Lama'].push(s);
        });

        return groups;
    }

    async function loadHistory() {
        const res = await fetch('/chat/history');
        const sessions = await res.json();
        const historyList = document.getElementById('historyList');
        historyList.innerHTML = '';

        if (sessions.length === 0) {
        historyList.innerHTML = '<div class="history-label">Belum ada riwayat</div>';
        return;
        }

        const groups = groupByDate(sessions);

        Object.entries(groups).forEach(([label, items]) => {
            if (items.length === 0) return;

        const labelEl = document.createElement('div');
            labelEl.className = 'history-label';
            labelEl.textContent = label;
            historyList.appendChild(labelEl);

            items.forEach(s => {
            const div = document.createElement('div');
            div.className = 'history-item';
            div.style.cssText = 'display:flex;justify-content:space-between;align-items:center;cursor:pointer;';

            // ✅ Perbaikan: onclick hanya pakai id, messages diambil dari server
            div.onclick = () => selectChat(s.id);

            div.innerHTML = `
                <span style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex:1;">${escapeHtml(s.title)}</span>
                <button onclick="deleteChat(event, '${s.id}')" style="background:none;border:none;color:#555;cursor:pointer;padding:2px 6px;flex-shrink:0;font-size:12px;" onmouseover="this.style.color='#ff4444'" onmouseout="this.style.color='#555'">✕</button>
            `;
            historyList.appendChild(div);
            });
        });
    }

    function openSidebar() {
        document.getElementById('sidebar').classList.add('open');
        document.getElementById('sidebarOverlay').classList.add('open');
    }

    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('open');
        document.getElementById('sidebarOverlay').classList.remove('open');
    }

    loadHistory();
</script>
</body>
</html>