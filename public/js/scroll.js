function scrollingContainer() {
  return {
    init() {
      this.scrollInterval = setInterval(() => {
        this.scrollContainer();
      }, 50); // Adjust scrolling speed (lower = faster)
    },
    scrollContainer() {
      const container = this.$el;
      container.scrollLeft -= 2; // Scroll right (change to -=)
      if (container.scrollLeft <= 0) {
        container.scrollLeft = container.scrollWidth; // Reset to end
      }
    },
    destroy() {
      clearInterval(this.scrollInterval);
    }
  };
}
