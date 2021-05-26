<style>
.vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 4px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}

.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
}

.margin {
            margin: 20px;
        }

/* for toggle behavior */

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}

body {
  background: white;
  min-height: 100vh;
  overflow-x: hidden;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}

.text-gray {
  color: #aaa;
}

</style>

<div class="container">
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <div class="media-body">
   
      
    
      </div>
    </div>
  </div>

  <div class="margin">

  <a class="nav-link" href="home" >Home <span class="sr-only"></span></a> <br><br>
  <a class="nav-link" href="home" >Artikel <span class="sr-only"></span></a> <br><br>
  <a class="nav-link" href="home" >Contact us <span class="sr-only"></span></a> <br><br>

</div>
</div>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  
  <!-- Demo content -->
  <div margin-left: 130px>

  <div class="margin">
  <h1>Welcome to My Website Click what you need on Menu
Side Bar</h1>
  </div>
  
      

</div>
<!-- End demo content -->
