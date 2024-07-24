
function handleCheckbox(checkbox) {
    const checkboxes = document.querySelectorAll('.pay-checkbox');
    checkboxes.forEach((cb) => {
      if (cb !== checkbox) 
      {
        cb.checked = false;
      }
    });
  }

