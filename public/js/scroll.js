function companiesScroll() {
  return {
    interval: null,
    direction: "right",
    scrollAmount: 1,
    scroll() {
      const container = this.$refs.sliderContainer;
      const scrollWidth = container.scrollWidth;
      const clientWidth = container.clientWidth;
      const intervalId = setInterval(() => {
        if (this.direction === "right") {
          container.scrollLeft += this.scrollAmount;
          // Check if we've reached the right end of the scrollable area
          if (Math.round(container.scrollLeft) >= scrollWidth - clientWidth) {
            this.direction = "left";
          }
        } else {
          container.scrollLeft -= this.scrollAmount;
          // Check if we've reached the left end of the scrollable area
          if (container.scrollLeft <= 0) {
            this.direction = "right";
          }
        }
      }, 16); // 60fps
      this.interval = intervalId;
    },
    destroy() {
      clearInterval(this.interval);
    }
  };
}

function testinomialsScroll() {
  return {
    interval: null,
    index: 0,
    initialScroll: 0,
    init() {
      const container = this.$refs.testinomailsSliderContainer;
      this.initialScroll = this.$refs.div1.clientWidth * 2;

      container.scroll({
        left: this.initialScroll
      });

      const intervalId = setInterval(() => {
        this.changeIndex();
      }, 5000);
    },
    changeIndex() {
      if (this.index < 2) {
        this.index++;
      } else {
        this.index = 0;
      }
    },
    scroll() {
      const container = this.$refs.testinomailsSliderContainer;

      container.scroll({
        left: this.initialScroll + this.$refs.div1.clientWidth * this.index,
        behavior: "smooth"
      });
    },
    destroy() {
      clearInterval(this.interval);
    }
  };
}
