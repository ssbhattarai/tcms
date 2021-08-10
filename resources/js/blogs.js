Livewire.on("deleteTriggered", (id, ntitleame) => {
    const proceed = confirm(`Are you sure you want to delete ${title}`);

    if (proceed) {
        Livewire.emit("delete", id);
    }
});


window.addEventListener("blog-deleted", (event) => {
    alert(`${event.detail.blog_title} was deleted!`);
});
