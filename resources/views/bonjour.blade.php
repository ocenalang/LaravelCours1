<style>
html, body {
  margin: 0;
  padding: 0;
}

.container {
  width: 100%;
  min-height: 100vh;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;

  /* Motif radial pastel */
  --s: 100px;
  --c1: #eadcf0;
  --c2: #c9c1df;

  --_g: var(--c2) 6% 14%, var(--c1) 16% 24%,
    var(--c2) 26% 34%, var(--c1) 36% 44%,
    var(--c2) 46% 54%, var(--c1) 56% 64%,
    var(--c2) 66% 74%, var(--c1) 76% 84%,
    var(--c2) 86% 94%;

  background:
    radial-gradient(100% 100% at 100% 0, var(--c1) 4%, var(--_g), #0008 96%, #0000),
    radial-gradient(100% 100% at 0 100%, #0000, #0008 4%, var(--_g), var(--c1) 96%) var(--c1);

  background-size: var(--s) var(--s);
}

.bouton {
  padding: 18px 38px;
  border: 2px solid #c5a9d8;
  border-radius: 14px;
  background: linear-gradient(135deg, #f3d9ec, #d9ccef);
  color: #59466b;
  font-family: Arial, sans-serif;
  cursor: pointer;
  box-shadow: 0 4px 15px #8d78a533;
  transition: all 0.3s ease;
}

.bouton:hover {
  transform: scale(1.05);
  background: linear-gradient(135deg, #f8e5f1, #e6dcf5);
  box-shadow: 0 6px 20px #8d78a555;
}

.bouton h6 {
  margin: 0;
  font-size: 22px;
}
</style>

<div class="container">
  <button class="bouton">
    <h6>Bonjour {{ $prenom }} !</h6>
  </button>
</div>