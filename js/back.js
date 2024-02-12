document.addEventListener('DOMContentLoaded', function () {
  const buttonMeta = document.querySelectorAll('.my-custom-button');

  buttonMeta.forEach(button => {
    button.addEventListener('click', function() {
      const productId = document.querySelector('#product_id').value;
      sendGptRequest(productId);
    });
  });

  function sendGptRequest(productId) {
    fetch('URL_DO_TWOJEGO_KONTROLERA', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        product_id: productId
      })
    })
      .then(response => response.json())
      .then(data => {
        // Zaktualizuj pole Meta Title i Meta Description
      })
      .catch(error => console.error('Error:', error));
  }
});
