<style>
  #top-btn {
    position: fixed;
    right: 10%;
    bottom: 0%;
    background-color: #418765;
    color: #fff;
    padding: 10px 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    cursor: pointer;
    opacity: 0.8;
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #top-btn > span:first-child {
    margin-bottom: 5px;
  }
</style>

<div id="top-btn">
  <span>Λ</span>
  <span>TOP</span>
</div>

<script>
  const topBtn = document.getElementById('top-btn');
  topBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
      topBtn.style.display = 'inline-flex';
    } else {
      topBtn.style.display = 'none';
    }
  });
</script>
