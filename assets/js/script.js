document.getElementById('loginForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('api/login.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      window.location.href = "dashboard.html";
    } else {
      alert("Login failed: " + data.message);
    }
  });
});
