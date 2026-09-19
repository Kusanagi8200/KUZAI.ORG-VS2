("use strict");

const repositories = [
    {
        id: "kuzai-demo-sandbox",
        name: "KUZAI-DEMO-SANDBOX",
        branch: "main",
        commit_short: "DEMO000",
        ready: true,
        editable: true,
        files: {
            "README.md": `# KUZAI DEMO SANDBOX

This repository exists only inside the public KUZAI demonstration.

You can open and edit its text files in the browser.

No server-side file is changed.
No Git command is executed.
No API is called.
Changes disappear when the page is reloaded.
`,
            "src/demo.py": `def ask_kuzai(prompt):
    message = str(prompt).strip()

    if not message:
        return "No instruction provided."

    return "KUZAI demo response: " + message


if __name__ == "__main__":
    print(ask_kuzai("Explain local AI"))
`,
            "src/assistant.js": `function createDemoResponse(message) {
    const cleanMessage = String(message).trim();

    if (!cleanMessage) {
        return "No instruction provided.";
    }

    return "KUZAI demo response: " + cleanMessage;
}

console.log(
    createDemoResponse("Explore the KUZAI interface")
);
`,
            "config/demo.json": `{
    "application": "KUZAI",
    "mode": "public-demo",
    "backend": false,
    "web_search": false,
    "file_upload": false,
    "voice": false
}
`
        }
    }
];

const originalSandboxFiles = structuredClone(
    repositories[0].files
);

const gitRagBtn = document.getElementById("gitRagBtn");
const repoMenu = document.getElementById("gitRagRepoMenu");
const filesMenu = document.getElementById("gitRagFilesMenu");

let activeRepoId = "";
let activeFilePath = "";
let editing = false;

function escapeHtml(value) {
    return String(value)
        .replaceAll("&", "&amp;")
        .replaceAll("<", "&lt;")
        .replaceAll(">", "&gt;")
        .replaceAll("\"", "&quot;")
        .replaceAll("\x27", "&#039;");
}

function getActiveRepo() {
    return repositories.find((repo) => repo.id === activeRepoId) || null;
}

function fileName(path) {
    const parts = String(path).split("/");
    return parts.pop() || path;
}

function fileDir(path) {
    const parts = String(path).split("/");
    if (parts.length <= 1) {
        return "/";
    }
    parts.pop();
    return parts.join("/") + "/";
}

function fileExtension(path) {
    const name = fileName(path);
    const index = name.lastIndexOf(".");
    if (index < 0) {
        return "FILE";
    }
    return name.slice(index + 1).toUpperCase();
}

function formatBytes(bytes) {
    const size = Number(bytes) || 0;

    if (size < 1024) {
        return size + " B";
    }

    if (size < 1024 * 1024) {
        return (size / 1024).toFixed(1) + " KB";
    }

    return (size / (1024 * 1024)).toFixed(1) + " MB";
}

function contentBytes(content) {
    return new TextEncoder().encode(String(content)).length;
}

function repoFiles(repo) {
    return Object.entries(repo.files).map(([path, content]) => ({
        path,
        content,
        size_bytes: contentBytes(content)
    }));
}

function renderRepoMenu() {
    const rows = repositories.map((repo) => {
        const selected = repo.id === activeRepoId;

        return `
            <button
                type="button"
                class="git-rag-menu-item ${selected ? "git-rag-menu-item--selected" : ""}"
                data-repo-id="${escapeHtml(repo.id)}"
            >
                <span class="git-rag-menu-item-main">
                    ${escapeHtml(repo.name)}
                </span>

                <span class="git-rag-menu-item-meta">
                    branch ${escapeHtml(repo.branch)} / ${escapeHtml(repo.commit_short)} / READY
                </span>
            </button>
        `;
    }).join("");

    repoMenu.innerHTML = `
        <div class="git-rag-menu-title">
            GIT-RAG REPOSITORIES
        </div>
        ${rows}
    `;
}

function showRepoList() {
    activeRepoId = "";
    activeFilePath = "";
    editing = false;

    filesMenu.hidden = true;
    repoMenu.hidden = false;
    gitRagBtn.hidden = true;

    renderRepoMenu();
}

function selectRepo(repoId) {
    const repo = repositories.find((item) => item.id === repoId);

    if (!repo) {
        return;
    }

    activeRepoId = repo.id;
    activeFilePath = "";
    editing = false;

    repoMenu.hidden = true;
    gitRagBtn.hidden = false;
    gitRagBtn.textContent = "GIT-RAG / BACK TO REPOS LIST";

    renderFilesMenu();
}

function renderFilesMenu() {
    const repo = getActiveRepo();

    if (!repo) {
        showRepoList();
        return;
    }

    const files = repoFiles(repo);

    const totalBytes = files.reduce(
        (total, file) => total + file.size_bytes,
        0
    );

    const rows = files.map((file) => `
        <button
            type="button"
            class="git-rag-file-item"
            data-file-path="${escapeHtml(file.path)}"
            title="${escapeHtml(file.path)}"
        >
            <span class="git-rag-file-main">
                <span class="git-rag-file-name">
                    ${escapeHtml(fileName(file.path))}
                </span>

                <span class="git-rag-file-dir">
                    ${escapeHtml(fileDir(file.path))}
                </span>
            </span>

            <span class="git-rag-file-info">
                <span class="git-rag-file-badge">
                    ${escapeHtml(fileExtension(file.path))}
                </span>

                <span class="git-rag-file-badge">
                    ${escapeHtml(formatBytes(file.size_bytes))}
                </span>

                <span class="git-rag-file-badge">
                    TEXT
                </span>
            </span>
        </button>
    `).join("");

    filesMenu.innerHTML = `
        <div class="git-rag-files-header">
            <div>
                <div class="git-rag-menu-title">
                    FILES / ${escapeHtml(repo.name)}
                </div>
            </div>

            <div class="git-rag-files-actions">
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>STATUS</button>
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>DIFF</button>
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>PULL</button>
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>COMMIT</button>
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>PUSH</button>
                <button type="button" class="git-rag-reindex-btn demo-operation" disabled>REINDEX</button>
                <button type="button" class="git-rag-reindex-btn git-rag-deselect-repo-btn" id="gitRagDeselectRepoBtn">DESELECT REPO</button>
                <button type="button" class="git-rag-menu-close" id="gitRagFilesCloseBtn">×</button>
            </div>
        </div>

        <div class="git-rag-page-meta-row">
            <span class="git-rag-page-meta-pill">${files.length} FILES</span>
            <span class="git-rag-page-meta-pill">BRANCH ${escapeHtml(repo.branch.toUpperCase())}</span>
            <span class="git-rag-page-meta-pill">${escapeHtml(formatBytes(totalBytes).toUpperCase())}</span>
            <span class="git-rag-page-meta-pill git-rag-reindex-status">DEMO SANDBOX</span>
            <span class="git-rag-page-meta-pill git-rag-reindex-status">GIT DISABLED</span>
        </div>

        <pre class="git-rag-file-viewer git-rag-git-output" hidden></pre>

        <div class="git-rag-files-list">
            ${rows}
        </div>
    `;

    filesMenu.hidden = false;

    const deselectBtn = document.getElementById("gitRagDeselectRepoBtn");
    const closeBtn = document.getElementById("gitRagFilesCloseBtn");

    if (deselectBtn) {
        deselectBtn.addEventListener("click", showRepoList);
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", showRepoList);
    }
}

function setEditMode(enabled) {
    const viewer = document.getElementById("gitRagFileViewer");
    const editor = document.getElementById("gitRagFileEditor");
    const editBtn = document.getElementById("gitRagFileEditBtn");
    const saveBtn = document.getElementById("gitRagFileSaveBtn");
    const cancelBtn = document.getElementById("gitRagFileCancelBtn");

    if (!viewer || !editor || !editBtn || !saveBtn || !cancelBtn) {
        return;
    }

    editing = enabled;

    viewer.hidden = enabled;
    editor.hidden = !enabled;
    editBtn.hidden = enabled;
    saveBtn.hidden = !enabled;
    cancelBtn.hidden = !enabled;

    if (enabled) {
        editor.focus();
    }
}

function renderFile(filePath) {
    const repo = getActiveRepo();

    if (!repo || !(filePath in repo.files)) {
        return;
    }

    activeFilePath = filePath;
    editing = false;

    const content = repo.files[filePath];
    const size = contentBytes(content);

    filesMenu.innerHTML = `
        <div class="git-rag-files-header">
            <div>
                <div class="git-rag-menu-title">
                    FILE / ${escapeHtml(repo.name)}
                </div>

                <div class="git-rag-menu-subtitle">
                    <span>${escapeHtml(filePath)}</span>
                    <span>${escapeHtml(formatBytes(size))}</span>
                </div>
            </div>

            <div class="git-rag-files-actions">
                <button type="button" class="git-rag-reindex-btn" id="gitRagFileBackBtn">FILES</button>
                <button type="button" class="git-rag-reindex-btn" id="gitRagFileEditBtn">EDIT</button>
                <button type="button" class="git-rag-reindex-btn" id="gitRagFileSaveBtn" hidden>SAVE</button>
                <button type="button" class="git-rag-reindex-btn" id="gitRagFileCancelBtn" hidden>CANCEL</button>
                <button type="button" class="git-rag-menu-close" id="gitRagFileCloseBtn">×</button>
            </div>
        </div>

        <div class="git-rag-reindex-status" id="gitRagFileEditStatus">
            Read only / demo sandbox editable
        </div>

        <pre class="git-rag-file-viewer" id="gitRagFileViewer">${escapeHtml(content)}</pre>

        <textarea
            class="git-rag-file-editor"
            id="gitRagFileEditor"
            spellcheck="false"
            hidden
        >${escapeHtml(content)}</textarea>
    `;

    const backBtn = document.getElementById("gitRagFileBackBtn");
    const closeBtn = document.getElementById("gitRagFileCloseBtn");
    const editBtn = document.getElementById("gitRagFileEditBtn");
    const saveBtn = document.getElementById("gitRagFileSaveBtn");
    const cancelBtn = document.getElementById("gitRagFileCancelBtn");
    const editor = document.getElementById("gitRagFileEditor");
    const viewer = document.getElementById("gitRagFileViewer");
    const editStatus = document.getElementById("gitRagFileEditStatus");

    if (backBtn) {
        backBtn.addEventListener("click", renderFilesMenu);
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", showRepoList);
    }

    if (editBtn) {
        editBtn.addEventListener("click", () => {
            editor.value = repo.files[filePath];
            setEditMode(true);
            editStatus.textContent = "Edit mode / browser memory only";
        });
    }

    if (cancelBtn) {
        cancelBtn.addEventListener("click", () => {
            editor.value = repo.files[filePath];
            setEditMode(false);
            editStatus.textContent = "Read only / edit cancelled";
        });
    }

    if (saveBtn) {
        saveBtn.addEventListener("click", () => {
            repo.files[filePath] = editor.value;
            viewer.textContent = editor.value;
            setEditMode(false);
            editStatus.textContent = "Saved in demo browser memory / no server modification";
        });
    }
}

gitRagBtn.addEventListener("click", showRepoList);

repoMenu.addEventListener("click", (event) => {
    const target = event.target.closest("[data-repo-id]");

    if (!target) {
        return;
    }

    selectRepo(target.getAttribute("data-repo-id") || "");
});

filesMenu.addEventListener("click", (event) => {
    const target = event.target.closest("[data-file-path]");

    if (!target) {
        return;
    }

    renderFile(target.getAttribute("data-file-path") || "");
});

window.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        showRepoList();
    }
});

showRepoList();
