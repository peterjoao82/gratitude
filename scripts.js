document.getElementById('mainImage').addEventListener('click', function() {
    document.getElementById('heading').classList.add('hidden');
    document.getElementById('description').classList.add('hidden');
    this.classList.add('hidden');
    document.getElementById('tags').classList.remove('hidden');
    showImagesForTag(tags[0]);
    startAutoSlide();
});

const tags = document.querySelectorAll('.tag');
let currentTagIndex = 0;
let interval;

tags.forEach(tag => {
    tag.addEventListener('click', function() {
        clearInterval(interval);
        currentTagIndex = Array.from(tags).indexOf(this);
        showImagesForTag(this);
        startAutoSlide();
    });
});

function showImagesForTag(tag) {
    const imageGrid = document.getElementById('imageGrid');
    imageGrid.innerHTML = ''; // Clear any previous images
    const images = tag.dataset.images.split(',');
    images.forEach(imageSrc => {
        const img = document.createElement('img');
        img.src = `img/${imageSrc}`;
        imageGrid.appendChild(img);
    });
    imageGrid.classList.remove('hidden');

    // Highlight the active tag
    tags.forEach(t => t.classList.remove('active'));
    tag.classList.add('active');
}

function startAutoSlide() {
    interval = setInterval(() => {
        currentTagIndex = (currentTagIndex + 1) % tags.length;
        showImagesForTag(tags[currentTagIndex]);
    }, 3000); // Change images every 3 seconds
}
