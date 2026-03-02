<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AI Chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/chat-ai.css') }}">
</head>
<body>

<!-- Sidebar overlay (mobile) -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="brand">
            <div class="brand-icon">img src="{{ asset('images/tunawoi.png') }}"</div>
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
    <!-- Mobile header -->
    <div class="mobile-header">
        <button class="hamburger" onclick="openSidebar()">
            <span></span><span></span><span></span>
        </button>
        <span style="font-size:14px;font-weight:600;">Trixie AI</span>
    </div>

    <!-- Chat area -->
    <div class="chat-area" id="chatArea">
        <!-- Welcome -->
        <div class="welcome" id="welcomeScreen">
            <div class="welcome-icon"><img src="{{ asset('images/tunawoi.png') }}" alt=""></div>
            <h1>Ada yang bisa saya bantu?</h1>
            <p>Tanyakan apa saja, saya siap membantu kamu.</p>
        </div>

        <!-- Messages -->
        <div class="messages" id="messages"></div>
    </div>

    <!-- Input -->
    <div class="input-wrapper">
        <div class="input-container">
            <textarea
                id="messageInput"
                placeholder="Kirim pesan..."
                rows="1"
                onkeydown="handleKeyDown(event)"
                oninput="autoResize(this)"
            ></textarea>
            <div class="input-actions">
                <span class="input-hint">Enter untuk kirim · Shift+Enter baris baru</span>
                <button class="btn-send" id="sendBtn" onclick="sendMessage()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="19" x2="12" y2="5"></line>
                        <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        <div class="disclaimer">AI dapat membuat kesalahan. Periksa kembali informasi penting.</div>
    </div>
</main>

<script>
    const messagesEl = document.getElementById('messages');
    const welcomeEl = document.getElementById('welcomeScreen');
    const inputEl = document.getElementById('messageInput');
    const sendBtn = document.getElementById('sendBtn');
    const chatArea = document.getElementById('chatArea');

    let isLoading = false;

    function autoResize(el) {
        el.style.height = 'auto';
        el.style.height = Math.min(el.scrollHeight, 160) + 'px';
    }

    function handleKeyDown(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    }

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
            <div class="msg-avatar ${isUser ? 'user' : 'ai'}">${isUser ? 'U' : 'img src="{{ asset('images/tunawoi.png') }}"'}</div>
            <div class="msg-content">
                <div class="msg-role">${isUser ? 'Kamu' : 'AI'}</div>
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
            <div class="msg-avatar ai"></div>
            <div class="msg-content">
                <div class="msg-role">AI</div>
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

    function scrollToBottom() {
        chatArea.scrollTop = chatArea.scrollHeight;
    }

    async function sendMessage() {
        const message = inputEl.value.trim();
        if (!message || isLoading) return;

        isLoading = true;
        sendBtn.disabled = true;
        inputEl.value = '';
        inputEl.style.height = 'auto';

        addMessage('user', message);
        addTyping();

        try {
            const res = await fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message })
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
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
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

    async function selectChat(id, messages) {
    // Load chat history ke backend
    await fetch(`/chat/load/${id}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    });

    // Tampilkan pesan di frontend
    messagesEl.innerHTML = '';
    messagesEl.classList.add('has-messages');
    welcomeEl.style.display = 'none';

    messages.forEach(m => {
        addMessage(m.role === 'user' ? 'user' : 'ai', m.content);
    });

    // Highlight item aktif di sidebar
    document.querySelectorAll('.history-item').forEach(el => {
        el.style.background = '';
    });

    loadHistory();
    closeSidebar();
}

    async function deleteChat(e, id) {
        e.stopPropagation();
        if (!confirm('Hapus percakapan ini?')) return;

        await fetch(`/chat/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        });

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
                div.style.display = 'flex';
                div.style.justifyContent = 'space-between';
                div.style.alignItems = 'center';
                div.style.cursor = 'pointer';
                div.onclick = () => selectChat(s.id, s.messages);  // pindah ke div
                div.innerHTML = `
                    <span style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex:1;">${escapeHtml(s.title)}</span>
                    <button onclick="deleteChat(event, ${s.id})" style="background:none;border:none;color:#555;cursor:pointer;padding:2px 4px;flex-shrink:0;font-size:12px;" onmouseover="this.style.color='#ff4444'" onmouseout="this.style.color='#555'">✕</button>
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