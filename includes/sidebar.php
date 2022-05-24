
<style media="screen">
#wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 769px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

.menuitem{
  font-size: 1.2vw;
  text-decoration: none;
  color: #588CAA;
  transition: 0.3s;
  margin-top: 1rem;
  margin-bottom: 1rem;
  cursor: pointer;
}


.menuitem:hover{
  transition: 0.3s;
  font-size: 1.2vw;
  text-decoration: none;
  color: #0a6294;
}

.nav-edit{
  margin-left: -15px;
  margin-bottom: 0px;
  margin-top: 0px;
}

.nav-edit-item{
  color: #588CAA;
  text-decoration: none;
  transition: 0.3s;
}

.nav-edit-item:hover{
  color: #0a6294;
  text-decoration: none;
  transition: 0.3s;
}

.spacingitem{
  margin-bottom: 0.7rem;
}

.sidebar li .submenu{
	list-style: none;
	margin: 0;
	padding: 0;
	padding-left: 1rem;
	padding-right: 1rem;
}

</style>

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(){
document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

  element.addEventListener('click', function (e) {

    let nextEl = element.nextElementSibling;
    let parentEl  = element.parentElement;

      if(nextEl) {
          e.preventDefault();
          let mycollapse = new bootstrap.Collapse(nextEl);

          if(nextEl.classList.contains('show')){
            mycollapse.hide();
          } else {
              mycollapse.show();
              // find other submenus with class=show
              var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
              // if it exists, then close all of them
              if(opened_submenu){
                new bootstrap.Collapse(opened_submenu);
              }
          }
      }
  }); // addEventListener
}) // forEach
});
// DOMContentLoaded  end
</script>

<div class="d-flex" id="wrapper">
<!-- Sidebar -->
<div class="border-right" id="sidebar-wrapper" style=" z-index: 5; background-color: #FFFFFF;">
<img class="sidebar-heading" src="" style="max-width: 15rem; min-width: 15rem;">
  <div class="list-group list-group-flush fixed-top col" id="mobielhide">
  <!-- <img class="sidebar-heading" src="../includes/img/logo.png" style="max-width: 15rem; min-width: 15rem;"> -->
  <nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion">
  <div class="row">
    <div class="col" style=" padding-left: 0;">
    <div style="text-align: center;"><a href="./" ><img src="./includes/logo.png" style="max-width: 12vw; min-width: 12vw; margin-top: 1rem;"></a></div>
    <!-- <div style="text-align: center;"><a href="./" style="color: #114DAA;"><img src="./imgages/image2vector.svg" style="max-width: 8vw; min-width: 8vw;"></a></div> -->
    <br>
    <div style="padding-left: 0.5rem;">
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
          <!-- <hr style="margin-bottom: 0.5rem;"> -->
        <a href="./" class="menuitem" ><i class="fas fa-home"></i> Dashboard</a>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
          <!-- <hr style="margin-bottom: 0.5rem;"> -->
        <a href="./stockread" class="menuitem" ><i class="fas fa-shopping-cart"></i> Voorraad</a>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <li class="nav-item has-submenu">
    		<a class="nav-link nav-edit menuitem"><i class="fas fa-box"></i> ArtikelBeheer</a>
    		<ul class="submenu collapse">
    			<li><a class="nav-link nav-edit-item" href="createproduct">Product aanmaken</a></li>
    			<li><a class="nav-link nav-edit-item" href="#">Opslag beheren </a> </li>
          <li><a class="nav-link nav-edit-item" href="cardsartikel">cards </a> </li>
    		</ul>
    	</li>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <li class="nav-item has-submenu">
    		<a class="nav-link nav-edit menuitem"><i class="fas fa-briefcase"></i> Bedrijfsbeheer</a>
    		<ul class="submenu collapse">
    			<li><a class="nav-link nav-edit-item" href="gebruikersbeheer">Gebruikersbeheer</a></li>
          <li><a class="nav-link nav-edit-item" href="readlogs">Log overzicht</a></li>
    		</ul>
    	</li>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="requests" class="menuitem" ><i class="far fa-envelope"></i> Aanvragen</a>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="" class="menuitem" style="" ><i class="fas fa-list-ol"></i> Instellingen</a>
<!-- <hr style=" margin-top: 0.5rem;"> -->
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="?logout" class="menuitem" style="color: red !important;" ><i class="fas fa-arrow-right-to-bracket"></i> Uitloggen</a>
<!-- <hr style=" margin-top: 0.5rem;"> -->
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
      <!-- switch location -->
      <a href="../extern/" class="btn btn-outline-danger">Switch naar extern</a>
    </div>
  </div>
    </div>
    </div>
  </div>
</ul>
</nav>
</div>
</div>
<!-- /#sidebar-wrapper -->


    <!-- Page Content -->
    <div id="page-content-wrapper" style="background-color: #EDEDED;">
