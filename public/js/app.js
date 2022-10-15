// FAQs Module
const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});

// Chat Module
const openChat = document.getElementById("openChat");
const closeChat = document.getElementById("closeChat");
const chatModal = document.getElementById("chat");

openChat.addEventListener("click", () => {
    chatModal.classList.add("show");
});

closeChat.addEventListener("click", () => {
    chatModal.classList.remove("show");
});

// Post Module
const openPost = document.getElementById("openPost");
const closePost = document.getElementById("closePost");
const postModal = document.getElementById("post");

openPost.addEventListener("click", () => {
    postModal.classList.add("show");
});

closePost.addEventListener("click", () => {
    postModal.classList.remove("show");
});

// Comment Module
const openComment = document.getElementById("openComment");
const closeComment = document.getElementById("closeComment");
const commentModal = document.getElementById("comment");

openComment.addEventListener("click", () => {
    commentModal.classList.add("show");
});

CommentChat.addEventListener("click", () => {
    commentModal.classList.remove("show");
});
