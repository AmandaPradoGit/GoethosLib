import header from './header.js';
import tabcontrol from './tabcontrol.js';

document.addEventListener('DOMContentLoaded', () => {
  document.body.prepend(header);
   document.body.appendChild(tabcontrol);
});
