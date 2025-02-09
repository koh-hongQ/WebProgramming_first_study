const contactBtn = document.querySelector('.contact-btn');
const popup = document.getElementById('contactPopup');
const closeBtn = document.getElementById('popupCloseBtn');

contactBtn.addEventListener('click', (e) => {
  e.preventDefault();
  popup.classList.add('show');
});

closeBtn.addEventListener('click', () => {
  popup.classList.remove('show');
});

// 팝업 영역 밖 클릭 시 닫기
window.addEventListener('click', (e) => {
  if(e.target === popup) {
    popup.classList.remove('show');
  }
});