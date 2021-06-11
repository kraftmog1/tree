<template>

  <div>
    <TopBar/>
    <header id="header" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-between">
        <div id="logo">
          <h1><a href="/">Web<span>master</span></a></h1>
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
        </div>
        <TopMenu/>
      </div>
    </header>
    <main id="main" class="container">
      <router-view/>
    </main>
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
  </div>
</template>

<script>
import TopMenu from "@/components/TopMenu";
import TopBar from "@/components/TopBar";

export default {
  components: {
    TopMenu,
    TopBar
  }
}
</script>
