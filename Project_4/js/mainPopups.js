function check(){
  var val = document.getElementById("status").value
  
  if(val == "inProgress" || val == "notStarted")
  {
    document.getElementById("date").disabled = true
  }
  else
  {
    document.getElementById("date").disabled = false
  }
}

function open(popup)
{
    if(popup == null)
    {
        return
    }

    popup.classList.add('active')
    overlay.classList.add('active')

}

function close(popup){
    if(popup == null)
        {
            return
        }
    
        popup.classList.remove('active')
        overlay.classList.remove('active')
    
}


const popupOpen = document.querySelectorAll('[data-popup-target]')
const popupClose = document.querySelectorAll('[data-popup-close]')
const overlay = document.getElementById('overlay')

popupOpen.forEach(button => {
    button.addEventListener("click", () =>{
        const popup = document.querySelector(button.dataset.popupTarget)
        open(popup)
    })
})

popupClose.forEach(button => {
    button.addEventListener("click", () =>{
        const popup = button.closest('.popup')
        close(popup)
    })
})