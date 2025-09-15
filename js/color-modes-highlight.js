function updateHighlightTheme() {
  const theme = document.documentElement.getAttribute('data-bs-theme');
  const darkLink = document.querySelector('link[data-bs-theme="dark"]');
  const lightLink = document.querySelector('link[data-bs-theme="light"]');
  if (theme === 'dark') {
    darkLink.disabled = false;
    lightLink.disabled = true;
  } else {
    darkLink.disabled = true;
    lightLink.disabled = false;
  }
}

// Initial call
updateHighlightTheme();

// Observe changes to data-bs-theme
const observer = new MutationObserver(() => updateHighlightTheme());
observer.observe(document.documentElement, { attributes: true, attributeFilter: ['data-bs-theme'] });