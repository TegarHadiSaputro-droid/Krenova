<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AI Chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg-primary: #0f0f11;
            --bg-secondary: #17171a;
            --bg-tertiary: #1e1e22;
            --bg-hover: #25252a;
            --border: #2a2a30;
            --accent: #4f8ef7;
            --accent-hover: #6ba3ff;
            --text-primary: #e8e8ee;
            --text-secondary: #888896;
            --text-muted: #55555f;
            --sidebar-width: 260px;
            --user-bubble: #1e2a45;
            --ai-bubble: #1a1a1f;
        }

        body {
            font-family: 'Sora', sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--bg-secondary);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 20px 16px 12px;
            border-bottom: 1px solid var(--border);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .brand-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, var(--accent), #7c5bf7);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .brand-name {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: -0.3px;
        }

        .btn-new-chat {
            width: 100%;
            padding: 9px 14px;
            background: var(--bg-tertiary);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--text-primary);
            font-family: 'Sora', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, border-color 0.2s;
        }

        .btn-new-chat:hover {
            background: var(--bg-hover);
            border-color: #3a3a44;
        }

        .btn-new-chat .plus-icon {
            width: 18px;
            height: 18px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            line-height: 1;
            color: white;
        }

        .sidebar-history {
            flex: 1;
            overflow-y: auto;
            padding: 12px 8px;
        }

        .history-label {
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            padding: 6px 8px 4px;
        }

        .history-item {
            padding: 9px 10px;
            border-radius: 8px;
            font-size: 13px;
            color: var(--text-secondary);
            cursor: pointer;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            transition: background 0.15s, color 0.15s;
            margin-bottom: 2px;
        }

        .history-item:hover {
            background: var(--bg-hover);
            color: var(--text-primary);
        }

        .history-item.active {
            background: var(--bg-hover);
            color: var(--text-primary);
        }

        .sidebar-footer {
            padding: 14px 16px;
            border-top: 1px solid var(--border);
            font-size: 12px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .user-avatar {
            width: 28px;
            height: 28px;
            background: linear-gradient(135deg, #4f8ef7, #7c5bf7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            color: white;
            flex-shrink: 0;
        }

        /* ===== MAIN AREA ===== */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
        }

        /* Mobile header */
        .mobile-header {
            display: none;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            background: var(--bg-secondary);
        }

        .hamburger {
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            padding: 4px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .hamburger span {
            display: block;
            width: 20px;
            height: 2px;
            background: currentColor;
            border-radius: 2px;
        }

        /* Chat messages area */
        .chat-area {
            flex: 1;
            overflow-y: auto;
            padding: 24px 0;
            scroll-behavior: smooth;
        }

        .chat-area::-webkit-scrollbar { width: 4px; }
        .chat-area::-webkit-scrollbar-track { background: transparent; }
        .chat-area::-webkit-scrollbar-thumb { background: var(--border); border-radius: 4px; }

        /* Welcome screen */
        .welcome {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
            padding: 40px 20px;
            animation: fadeUp 0.5s ease;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .welcome-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--accent), #7c5bf7);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 20px;
            box-shadow: 0 0 40px rgba(79,142,247,0.2);
        }

        .welcome h1 {
            font-size: 22px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
            letter-spacing: -0.4px;
        }

        .welcome p {
            font-size: 14px;
            color: var(--text-secondary);
            max-width: 320px;
            line-height: 1.6;
        }

        /* Messages */
        .messages {
            display: none;
            flex-direction: column;
            gap: 0;
            max-width: 720px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }

        .messages.has-messages {
            display: flex;
        }

        .message {
            padding: 20px 0;
            display: flex;
            gap: 14px;
            animation: fadeUp 0.3s ease;
            border-bottom: 1px solid var(--border);
        }

        .message:last-child { border-bottom: none; }

        .msg-avatar {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 600;
        }

        .msg-avatar.user {
            background: linear-gradient(135deg, #4f8ef7, #7c5bf7);
            color: white;
        }

        .msg-avatar.ai {
            background: linear-gradient(135deg, #2a2a35, #3a3a45);
            color: var(--accent);
            font-size: 16px;
        }

        .msg-content {
            flex: 1;
            padding-top: 4px;
        }

        .msg-role {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 8px;
        }

        .msg-text {
            font-size: 14px;
            line-height: 1.75;
            color: var(--text-primary);
            white-space: pre-wrap;
            word-break: break-word;
        }

        /* Typing indicator */
        .typing {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 4px 0;
        }

        .typing span {
            width: 6px;
            height: 6px;
            background: var(--accent);
            border-radius: 50%;
            animation: bounce 1.2s infinite;
        }

        .typing span:nth-child(2) { animation-delay: 0.2s; }
        .typing span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes bounce {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
            30% { transform: translateY(-6px); opacity: 1; }
        }

        /* ===== INPUT AREA ===== */
        .input-wrapper {
            padding: 16px 20px 20px;
            background: var(--bg-primary);
        }

        .input-container {
            max-width: 720px;
            margin: 0 auto;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 12px 14px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: border-color 0.2s;
        }

        .input-container:focus-within {
            border-color: #3a3a4a;
        }

        #messageInput {
            background: none;
            border: none;
            outline: none;
            color: var(--text-primary);
            font-family: 'Sora', sans-serif;
            font-size: 14px;
            resize: none;
            min-height: 24px;
            max-height: 160px;
            line-height: 1.6;
            overflow-y: auto;
        }

        #messageInput::placeholder { color: var(--text-muted); }

        .input-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
        }

        .input-hint {
            font-size: 11px;
            color: var(--text-muted);
            margin-right: auto;
        }

        .btn-send {
            width: 34px;
            height: 34px;
            background: var(--accent);
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, transform 0.1s;
            flex-shrink: 0;
        }

        .btn-send:hover { background: var(--accent-hover); }
        .btn-send:active { transform: scale(0.95); }
        .btn-send:disabled { background: var(--bg-tertiary); cursor: not-allowed; }

        .btn-send svg {
            width: 16px;
            height: 16px;
        }

        .disclaimer {
            text-align: center;
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 10px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Sidebar overlay on mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 99;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                z-index: 100;
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .sidebar-overlay.open {
                display: block;
            }

            .mobile-header {
                display: flex;
            }

            .input-hint { display: none; }
        }
    </style>
</head>
<body>

<!-- Sidebar overlay (mobile) -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="brand">
            <div class="brand-icon">🤖</div>
            <span class="brand-name">AI Chat</span>
        </div>
        <button class="btn-new-chat" onclick="newChat()">
            <span class="plus-icon">+</span>
            Obrolan Baru
        </button>
    </div>

    <div class="sidebar-history" id="historyList">
        <div class="history-label">Kemarin</div>
        <div class="history-item active">Apa itu Laravel?</div>
        <div class="history-item">Cara membuat API REST</div>
        <div class="history-label" style="margin-top:10px;">30 Hari</div>
        <div class="history-item">Perbedaan GET dan POST</div>
        <div class="history-item">Belajar PHP dasar</div>
        <div class="history-item">Tips optimasi database</div>
    </div>

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
        <span style="font-size:14px;font-weight:600;">AI Chat</span>
    </div>

    <!-- Chat area -->
    <div class="chat-area" id="chatArea">
        <!-- Welcome -->
        <div class="welcome" id="welcomeScreen">
            <div class="welcome-icon">🤖</div>
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

    function addMessage(role, text) {
        // Hide welcome
        welcomeEl.style.display = 'none';
        messagesEl.classList.add('has-messages');

        const div = document.createElement('div');
        div.className = 'message';

        const isUser = role === 'user';
        div.innerHTML = `
            <div class="msg-avatar ${isUser ? 'user' : 'ai'}">${isUser ? 'U' : '🤖'}</div>
            <div class="msg-content">
                <div class="msg-role">${isUser ? 'Kamu' : 'AI'}</div>
                <div class="msg-text">${escapeHtml(text)}</div>
            </div>
        `;

        messagesEl.appendChild(div);
        scrollToBottom();
        return div;
    }

    function addTyping() {
        welcomeEl.style.display = 'none';
        messagesEl.classList.add('has-messages');

        const div = document.createElement('div');
        div.className = 'message';
        div.id = 'typingIndicator';
        div.innerHTML = `
            <div class="msg-avatar ai">🤖</div>
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

    function escapeHtml(text) {
        return text
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
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
            console.log(data);
            removeTyping();

            const reply = data.reply || data.error?.message || 'Maaf, terjadi kesalahan.';
            addMessage('ai', reply);

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
        // Reset backend session
        await fetch('/chat/new', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        });

        // Reset frontend
        messagesEl.innerHTML = '';
        messagesEl.classList.remove('has-messages');
        welcomeEl.style.display = '';
        inputEl.value = '';
        inputEl.style.height = 'auto';
        inputEl.focus();
        closeSidebar();

        // Reload riwayat sidebar
        loadHistory();
}

    function openSidebar() {
        document.getElementById('sidebar').classList.add('open');
        document.getElementById('sidebarOverlay').classList.add('open');
    }

    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('open');
        document.getElementById('sidebarOverlay').classList.remove('open');
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

        historyList.innerHTML = '<div class="history-label">Riwayat Chat</div>';
        sessions.forEach(s => {
            const div = document.createElement('div');
            div.className = 'history-item';
            div.textContent = s.title;
            historyList.appendChild(div);
        });
    }

    // Load riwayat saat halaman pertama dibuka
loadHistory();
</script>
</body>
</html>