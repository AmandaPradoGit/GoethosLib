const tabcontrol = document.createElement('div');
tabcontrol.innerHTML = `
    <div class="tab-control w-full mx-auto px-16">
            <button class="tab-btn mr-4 text-yellow-500 border-b-2 border-yellow-500 font-bold py-2 text-sm">Na Estante</button>
            <button class="tab-btn mr-4 text-gray-600 font-medium py-2 text-sm">Lidos</button>
            <button class="tab-btn mr-4 text-gray-600 font-medium py-2 text-sm">Lendo</button>
            <button class="tab-btn mr-4 text-gray-600 font-medium py-2 text-sm">Abandonados</button>
            <button class="tab-btn mr-4 text-gray-600 font-medium py-2 text-sm">Quero ler</button>

        </div>
          <div class="tab-content mt-4">
            <div class="tab-panel px-16">Conteúdo da Aba 1</div>
            <div class="tab-panel hidden px-16">Conteúdo da Aba 2</div>
            <div class="tab-panel hidden px-16">Conteúdo da Aba 3</div>
            <div class="tab-panel hidden px-16">Conteúdo da Aba 4</div>
            <div class="tab-panel hidden px-16">Conteúdo da Aba 5</div>
        </div>
`;

document.body.appendChild(tabcontrol);

const tabs = tabcontrol.querySelectorAll('.tab-btn');
const panels = tabcontrol.querySelectorAll('.tab-panel');

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => {
      t.classList.remove('text-yellow-500', 'border-b-2', 'border-yellow-500', 'font-bold');
      t.classList.add('text-gray-600', 'font-medium');
    });

    tab.classList.remove('text-gray-600', 'font-medium');
    tab.classList.add('text-yellow-500', 'border-b-2', 'border-yellow-500', 'font-bold');

    panels.forEach(p => p.classList.add('hidden'));
    panels[index].classList.remove('hidden');
  });
});

export default tabcontrol;