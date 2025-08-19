// document.querySelectorAll('.showAndHide').forEach((showButton) => {
//   let isClicked = true;
  
//   showButton.addEventListener('click', function() {
//     // Trouve le panel associé (le plus proche .elementToWorkOn)
//      let panel = showButton.closest('.dadscopy')?.nextElementSibling;
//     if (!panel || !panel.classList.contains('elementToWorkOn')) console.log("no panel found :(((");

//     // Toggle display
//     if ((panel.style.display === 'none' || panel.style.display === '') & isClicked) {
//       panel.style.display = 'flex';

//       // Change bouton style/icon si besoin
//       showButton.querySelector('.show-hide-icon').name = "eye-off-outline";
//       showButton.querySelector('.button-label').textContent = "Hide panel";
//       showButton.style.background = "#f1f1f1";
//       showButton.style.color = "#292c35";
//     } else {
//       panel.style.display = 'none';

//       //change icon and button
//       showButton.querySelector('.show-hide-icon').name = "eye-outline";
//       showButton.querySelector('.button-label').textContent = "Show panel";
//       showButton.style.background = "#212529";
//       showButton.style.color = "#ffffff";

//       // Remet le bouton Run demo à chaque fermeture
//       const demoLink = panel.querySelector('.open-demo')?.getAttribute('href') || "#";
//       panel.innerHTML = `
//         <a target="_blank" rel="noopener noreferrer" href="${demoLink}" class="open-demo">Open demo in new tab</a>
//         <div class="demo-placeholder">
//           <button class="run-demo-btn position-absolute top-50 start-50 translate-middle">Run demo</button>
//         </div>
//       `;

//       // Réattache l'événement au nouveau bouton
//       panel.querySelector('.run-demo-btn').onclick = function() {
//         const placeholder = panel.querySelector('.demo-placeholder');
//         const iframe = document.createElement('iframe');
//         iframe.src = demoLink;
//         iframe.style.border = 'none';
//         placeholder.replaceWith(iframe);
//       };
//     }
//   });
// });

// // Initialisation pour chaque panel au chargement
// document.querySelectorAll('.elementToWorkOn').forEach((panel) => {
//   const demoLink = panel.querySelector('.open-demo')?.getAttribute('href') || "#";
//   const runDemoBtn = panel.querySelector('.run-demo-btn');
//   if (runDemoBtn) {
//     runDemoBtn.onclick = function() {
//       const placeholder = panel.querySelector('.demo-placeholder');
//       const iframe = document.createElement('iframe');
//       iframe.src = demoLink;
//       iframe.style.border = 'none';
//       placeholder.replaceWith(iframe);
//     };
//   }
// });








const divContainer = document.querySelector("#elementToWorkOn");
const showButton = document.querySelector(".showAndHide");
let isClicked = true;

const label = document.querySelector(".button-label");
const originalText = label.textContent;

let showOrHide = () => {
  if(isClicked) {
    divContainer.style.display = 'flex';
    isClicked = false;
    
//   change the icon : 
    const icon = document.querySelector(".show-hide-icon");
    icon.name="eye-off-outline";
    label.textContent = "Hide panel";
    showButton.style.background = "#f1f1f1";
    showButton.style.color = "#292c35";

  } else {
    divContainer.style.display = 'none';
    isClicked = true;

//   change the icon : 
    const icon = document.querySelector(".show-hide-icon");
    icon.name="eye-outline"
    label.textContent = originalText;
    showButton.style.background = "#212529";
    showButton.style.color = "#ffffff";

 //  Remet le bouton Run demo à chaque fermeture
    divContainer.innerHTML = `
    <a target="_blank" rel="noopener noreferrer" href="features/bw-check.html" id="open-demo">Open demo in new tab</a>
    <div id="demo-placeholder">
      <button id="run-demo-btn" class="position-absolute top-50 start-50 translate-middle">Run demo</button>
    </div>
    `;
 //  Réattache l'événement au nouveau bouton
    document.getElementById('run-demo-btn').onclick = function() {
      const placeholder = document.getElementById('demo-placeholder');
      const iframe = document.createElement('iframe');
      iframe.src = 'features/bw-check.html';
      iframe.title = 'browser-check feature';
      iframe.style.border = 'none';
      placeholder.replaceWith(iframe);
    };
  }

}

document.getElementById('run-demo-btn').onclick = function() {
  const placeholder = document.getElementById('demo-placeholder');
// Crée l'iframe
  const iframe = document.createElement('iframe');
  iframe.src = 'features/bw-check.html';
  iframe.title = 'browser-check feature';
  iframe.style.border = 'none';
// Remplace le placeholder par l'iframe
  placeholder.replaceWith(iframe);
  
};


// 
// 
// 
// 
// .forEach((showButton) => {
//   showButton.addEventListener("click", () => {
//     const targetElement = document.querySelector(showButton.dataset.copy);
//     const textToCopy = targetElement.textContent;
//     //.replace(/\s+/g, " ")
//     //.trim()
//     navigator.clipboard.writeText(textToCopy).then(() => {
//       const label = showButton.querySelector(".copy-label");
//       const originalText = label.textContent;

//       showButton.disabled = true;
//       label.textContent = "Copied!";

//       setTimeout(() => {
//         showButton.disabled = false;
//         label.textContent = originalText;
//       }, 1000);
//     });
//   });
// });