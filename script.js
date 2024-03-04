// Mapeamento de cidades por estado
const cidadesPorEstado = {
    'PR': ['Curitiba', 'Londrina', 'Maringá', 'Ponta Grossa', 'Cascavel'],
    'SC': ['Joinville', 'Florianópolis', 'Blumenau', 'São José', 'Itajaí'],
    'RS': ['Porto Alegre', 'Caixias do Sul', 'Canoas', 'Pelotas', 'Santa Maria']
  };
  
  //Função para atualizar as opções do seletor de cidades com base no estado selecionado
  function atualizarCidades() {
    const estadoSelecionado = document.getElementById('uf').value;
    const cidades = cidadesPorEstado[estadoSelecionado];
  
    const cidadeSelect = document.getElementById('cidade');
    cidadeSelect.innerHTML = ''; //Limpa as opções atuais
  
    cidades.forEach(cidade => {
      const option = document.createElement('option');
      option.textContent = cidade;
      option.value = cidade;
      cidadeSelect.appendChild(option);
    });
}