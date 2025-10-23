const header = document.createElement('header');
header.className = 'fixed top-0 left-0 w-full z-50 bg-white'; 
header.innerHTML = `
  <div class="font-mono p-4 md:p-6 shadow-md">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
      
      <div class="flex items-center space-x-4">
        <img src="/view/imgs/icon.png" alt="icon" class="w-12 h-10 md:w-16 md:h-12 rounded-full" />
        <h1 class="text-xl md:text-2xl font-light">Goethos</h1>
      </div>
      
      <div class="flex items-center border border-black rounded-full px-4 py-2 h-10 md:h-7 w-full md:w-80">
        <input type="text" class="w-full outline-none text-sm text-gray-700 bg-transparent" />
        <button>
          <img src="/view/imgs/search.png" alt="Ícone de envio" class="w-5 h-5" />
        </button>
      </div>
      
      <div class="flex items-center space-x-4 md:space-x-8">
        <p class="text-sm md:text-base">Olá, Nome!</p>
        <img src="/view/imgs/profilepic.png" alt="Perfil" class="w-6 h-6 md:w-8 md:h-8 rounded-full" />
      </div>
      
    </div>
  </div>`;
export default header;
