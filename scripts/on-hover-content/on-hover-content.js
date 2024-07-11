// support starts

document.addEventListener("DOMContentLoaded", function () {
  const supportVars = document.getElementsByClassName("support");
  const onHoverSupportVars =
    document.getElementsByClassName("on-hover-support");

  Array.from(supportVars).forEach((support, index) => {
    const onHoverSupport = onHoverSupportVars[index];
    const downArrow = support.querySelector("#down-arrow");

    support.addEventListener("mouseover", () => {
      onHoverSupport.style.display = "flex";
      support.style.background = "#276df8";
      downArrow.style.transform = "rotate(180deg)";
    });

    support.addEventListener("mouseout", () => {
      onHoverSupport.style.display = "none";
      support.style.background = "";
      downArrow.style.transform = "";
    });

    onHoverSupport.addEventListener("mouseover", () => {
      onHoverSupport.style.display = "flex";
      support.style.background = "#276df8";
      downArrow.style.transform = "rotate(180deg)";
    });

    onHoverSupport.addEventListener("mouseout", () => {
      onHoverSupport.style.display = "none";
      support.style.background = "";
      downArrow.style.transform = "";
    });
  });
});

// support ends

// Account starts
document.addEventListener("DOMContentLoaded", function () {
  const accountVars = document.getElementsByClassName("account");
  const onHoverAccountVars =
    document.getElementsByClassName("on-hover-account");

  Array.from(accountVars).forEach((account, index) => {
    const onHoverAccount = onHoverAccountVars[index];
    const downArrowAccount = account.querySelector("#down-arrow-account");

    account.addEventListener("mouseover", () => {
      onHoverAccount.style.display = "flex";
      account.style.background = "#2d75c7";
      downArrowAccount.style.transform = "rotate(180deg)";
    });

    account.addEventListener("mouseout", () => {
      onHoverAccount.style.display = "none";
      account.style.background = "";
      downArrowAccount.style.transform = "";
    });

    onHoverAccount.addEventListener("mouseover", () => {
      onHoverAccount.style.display = "flex";
      account.style.background = "#2d75c7";
      downArrowAccount.style.transform = "rotate(180deg)";
    });

    onHoverAccount.addEventListener("mouseout", () => {
      onHoverAccount.style.display = "none";
      account.style.background = "";
      downArrowAccount.style.transform = "";
    });
  });
});

// Account ends

// login-regisetr starts'

document.addEventListener('DOMContentLoaded', (event) => {
  const loginRegisterButton = document.getElementById('login-register-button');
  const loginRegisterDiv = document.querySelector('.login-register');
  const closeLoginRegisterButton = document.getElementById('close-login-register');

  // Function to show the login-register div
  function showLoginRegister() {
      loginRegisterDiv.style.display = 'flex';
  }

  // Function to hide the login-register div
  function hideLoginRegister() {
      loginRegisterDiv.style.display = 'none';
  }

  // Show login-register div when the login-register-button is clicked
  loginRegisterButton.addEventListener('click', showLoginRegister);

  // Hide login-register div when the close-login-register button is clicked
  closeLoginRegisterButton.addEventListener('click', hideLoginRegister);

  // Hide login-register div when clicked outside of it
  document.addEventListener('click', function(event) {
      if (!loginRegisterDiv.contains(event.target) && 
          event.target !== loginRegisterButton &&
          event.target !== closeLoginRegisterButton) {
          hideLoginRegister();
      }
  });

  // Prevent hiding when clicking inside login-register div or on login-register-button
  loginRegisterDiv.addEventListener('click', function(event) {
      event.stopPropagation();
  });
});

// login-regisetr ends


// <!-- after login on hover username options starts -->

document.addEventListener('DOMContentLoaded', (event) => {
  const userDropdown = document.getElementById('userDropdown');
  const afterLoginOptions = document.getElementById('afterLoginOptions');
  // const userOptions = document.getElementById('userOptions');

  afterLoginOptions.addEventListener('mouseover', () => {
      userDropdown.style.display = 'flex';
  });

  userDropdown.addEventListener('mouseleave', () => {
      userDropdown.style.display = 'none';
  });

  userOptions.addEventListener('mouseover', () => {
      userDropdown.style.display = 'flex';
  });

  userOptions.addEventListener('mouseleave', () => {
      userDropdown.style.display = 'none';
  });
});

// <!-- after login on hover username options ends -->
