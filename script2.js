document.getElementById('signInForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
  
    const username = document.getElementById('Email-Id').value;
    const password = document.getElementById('password').value;
  
    
    if (Email-Id === 'Email-id' && password === 'password') {
      alert('Sign In successful!');
      
    } else {
      alert('Invalid credentials. Please try again.');
    }
  });
  
  document.getElementById('signInForm').addEventListener('submit', function(event) {
    event.preventDefault();  
  
   
    var email = document.getElementById('Email-Id').value;
    var password = document.getElementById('password').value;
  
   
  
   
    window.location.href = 'survey2.html';
  });

 