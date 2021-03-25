<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<body>

<div class="w3-container w3-text-red w3-hover-teal w3-hover-text-black">
  <h1>Background Colors</h1>
  <p>The w3-color classes defines background colors for HTML elements:</p>
</div>

<div class="w3-container w3-red">
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>



<div class="w3-container w3-yellow">
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>

<div class="w3-container w3-gray">
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>

<div class="w3-container w3-grey">
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>
<div class="w3-container">
  <h2>Displaying Panels</h2>
  <p>Panels are the same as containers except for an added top and bottom margin.</p>

  <div class="w3-panel w3-red">
    <p>I am a panel.</p>
  </div>
  <div class="w3-panel w3-green">
    <p>I am a panel.</p>
  </div>

  <div class="w3-container w3-red">
    <p>I am a container.</p>
  </div>
  <div class="w3-container w3-green">
    <p>I am a container.</p>
  </div>
  <div class="w3-panel w3-blue w3-card-4">
    <p>London is the most populous city in the United Kingdom,with a metropolitan area of over 9 million inhabitants.</p>
  </div>
  <div class="w3-panel w3-blue w3-round-xlarge">
    <p>London is the most populous city in the United Kingdom,
    with a metropolitan area of over 9 million inhabitants.</p>
  </div>
  <div class="w3-container w3-red w3-display-container">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-display-topright">X</span>
    <p>Click on the X to close this panel.</p>
  </div>
  <div class="w3-panel w3-blue w3-round-xlarge">
    <p>London is the most populous city in the United Kingdom,
    with a metropolitan area of over 9 million inhabitants.</p>
  </div>
</div>

<button class="w3-btn w3-green" onclick="document.getElementById('id01').style.display='block'">Show panel</button>

<div id="id01" class="w3-panel w3-green w3-display-container" style="display:none">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-display-topright">X</span>
  <p>Click on the X to close this panel.</p>
  <p>Click on the X to close this panel.</p>
</div>

<div class="w3-panel w3-blue w3-round-xlarge">
    <p>London is the most populous city in the United Kingdom,
    with a metropolitan area of over 9 million inhabitants.</p>
</div>

<div class="w3-card-4 w3-yellow">
  <p>w3-card</p>
</div>

<div class="w3-container">
  <h2>Card Content</h2>
  <p>Add containers inside the card to create different sections:</p>

  <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-blue">
      <h1>Header</h1>
    </header>

    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <footer class="w3-container w3-blue">
      <h5>Footer</h5>
    </footer>
  </div>
</div>
<div class="w3-container">
  <h2>Photo Card</h2>

  <div class="w3-card-4" style="width:50%">
    <img src="img_avatar3.png" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>The Italian / Austrian Alps</p>
    </div>
  </div>
</div>

<div class="w3-container">
  <h2>Card Example</h2>

  <div class="w3-card-4 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center">
      <h3>Friend Request</h3>
      <img src="img_avatar3.png" alt="Avatar" style="width:80%">
      <h5>John Doe</h5>

      <div class="w3-section">
        <button class="w3-button w3-green">Accept</button>
        <button class="w3-button w3-red">Decline</button>
      </div>
    </div>

  </div>
</div>

<div class="w3-container">
  <h2>Card Example</h2>

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>John Doe</h3>
    </header>
    <div class="w3-container">
      <p>1 new friend request</p>
      <hr>
      <img src="img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
  </div>
</div>

<div class="w3-card-4 w3-margin" style="width:50%">
  <div class="w3-display-container w3-text-white">
    <img src="img_london.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div>
  </div>
  <div class="w3-row">
    <div class="w3-third w3-center">
      <h3>MON</h3>
      <img src="img_weather_sun.jpg" alt="sun" style="width:80px">
    </div>
    <div class="w3-third w3-center">
      <h3>TUE</h3>
      <img src="img_weather_cloud.jpg" alt="cloud" style="width:80px">
    </div>
    <div class="w3-third w3-center w3-margin-bottom">
      <h3>WED</h3>
      <img src="img_weather_clouds.jpg" alt="clouds" style="width:80px">
    </div>
  </div>
</div>

<div class="w3-container w3-teal">
  <h2>Tarea 1</h2>
  <p>Graficar las rectas de los sistemas de ecuaciones.</p>
</div>

<div class="w3-container">
  <h2>Ejemplos</h2>

  <div class="w3-panel w3-red">
    <p>Ejemplo 1</p>
    <p>1. Un d ́ıa Juan Pablo invita a desayunar y a comer a algunos de sus compa ̃neros en
la cafeter ́ıa de la UAM-A. En esta cafeter ́ıa, el desayuno cuesta 1.5 pesos y la comida
tiene un costo de 2.5 pesos.
Si ese d ́ıa  ́el paga 31 pesos, y el total de desayunos y comidas que invita es 16, ¿cuántos
desayunos y cu ́antas comidas son?</p>
  </div>
  <div class="w3-panel w3-green">
    <p>I am a panel.</p>
  </div>
</div>

$$
    \begin{matrix}
    1 & x & x^2 \\
    1 & y & y^2 \\
    1 & z & z^2 \\
    \end{matrix}
$$

$$ \left[
\begin{array}{cc|c}
  1&2&3\\
  4&5&6
\end{array}
\right] 
$$
$$
\bigl(\begin{smallmatrix} ... \end{smallmatrix}\bigr)
$$
<p>http://pagina.com.devel/</p>
<p>https://victorroblesweb.es/2016/03/26/crear-varios-hosts-virtuales-en-wampserver/</p>
<p>https://math.meta.stackexchange.com/questions/5020/mathjax-basic-tutorial-and-quick-reference</p>
<p>
  When \(a \ne 0\), there are two solutions to \(ax^2 + bx + c = 0\) and they are
  \[x = {-b \pm \sqrt{b^2-4ac} \over 2a}.\]
</p>

<p>Ejemplos:

</p>

</body>
</html> 