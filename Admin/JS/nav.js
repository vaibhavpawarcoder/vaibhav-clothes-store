function openNav(){
  document.getElementById('mySidebar').style.width='250px';
  document.getElementById("main").style.marginLeft='250px';
}
function closeNav(){
  document.getElementById('mySidebar').style.width='0';
  document.getElementById("main").style.marginLeft='0';
}

function sideMenu() {
  console.log("side Click")
  let sidebar = document.getElementById('sidebar');
  if (sidebar.style.display === 'block') {
      sidebar.style.display = 'none'
  } else {
      sidebar.style.display = 'block'
  }
}

function topMenu() {
  console.log("top Click")
  document.getElementById('topbar').classList.toggle('class')
}