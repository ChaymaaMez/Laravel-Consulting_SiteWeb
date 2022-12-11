@extends('master.header')
@section('title')
BCA Consulting
@endsection
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://culture-rh.com/wp-content/uploads/2020/02/tresorier-cse-role-missions-designation-heures-delegation-suppleant-adjoint-formation.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://culture-rh.com/wp-content/uploads/2019/11/role-secretaire-cse-missions-election-protection.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://culture-rh.com/wp-content/uploads/2019/09/president-cse-role-missions-designation-tresorier-secretaire.jpg" class=" d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p>
  <br>
  <div class="container" style="display: flex;justify-content: center;flex-direction: row;">
  <div class="mb-3 card col-md-12 col-mg-4" >
    <div class="row g-12">
    <div class="col-md-4">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAABF1BMVEX///8lb/kAAAASaPkAZfmct/whbfkdbPkudvny9v8AY/lXV1d5eXkXavlej/rH1v33+v9zc3NgYGBgcoadnZ1od4nS0tJcb4V8hI/t7e3j4+SMjpZra2uloqM1NTVUVFVxfYyBh5HQ3f7d5/7m7f6wrKu6trXDw8O5zP2hvPxMhPr29vasw/x0nfs8fPqXlptolfoPDw/Z2dmCpvuyyP2SsfxHR0dTh/p/o/vA0v3N2/1Cf/qdufyKioohISFAQEDBx8+qs76Tnqx+jJ5MZH3AytuOmqioqrBZgNFph86hnZV8kcCUm7FWguF8k8uyrKOXpMjEvbVtj+Gutcmps8/Y0caKo+Kbr+OywebR1eHk5+z///QqKitoJm/9AAANmElEQVR4nO2cDXvathbHbaxYxsGQpJQUCk0KBhLeSiBAEkLSrNvdbu96t7bL1nb5/p/jSrZsyS/CNthpdh/9mudpINiW/j7n6OhIRpIEAoFAIBAIBAKBQCAQCAQCgUAgEAgEAoFAIBAIBAKBQCAQCAQCgUAgEAgEAoFAIBAIBIInjnl5Oh0WF71FcXyxc9La+97tebK0BmMZAMWAEKoQGoYCAOzNrr53s54g5vUS6ST7UKGhy9Pm927c06I5VhTVr5SDAUbnwh8dmgs9YFNeAwPy4Hs38mlgjnW4VioLoF0+YpOal+eDwUmpmX+8a8ZiJ45U2Lr0ohn/rKXZjp/r08HJZXT3WzsLRUfjDALourGYlbgh4Iq9yEn8xm2K2QOxpMJAI36DdnQlDCTC6GLdeDFAwwxkoicaYYA85ByxAMypjWQd34DL4AC4Dv0i7ol3FK6FGmBZ4hx1LoOwYcbQe2ExwPTcZ8A7aVrM4puVjbKIGUX4YiFguOhmUeeNyFDvBZ3x1HMNONxKikgu9IRaoZusxQtca8VCoheDhzThmuCpKsG71PNJm+loME5qVxioMmr1+1VMP3juCLFkMPMfcck1KwsjIEXL13yQZYgfR/SHp5ZsStXJ27sf3j0/PPzR5vD5u7tJIrFUxWehzQgrD4rlv4Qxzk6ri03syuqn/NPbu3dIp0MW9PKO0xPVwncWZcfTmnzgA2hyyg6LQbFGviPCPDUlrpPHK7fdC3yCb3eHXrkOfzym/siKtRwhNE3xTBNgz9OcomdUVhVdG19cDHsKcOJYQKxWoAPgPCOtSptrhayCDDw/HD7zcPivELGgE8v3mkPWcSA7vJ17mqNo18RJ9y6LwAgXaxZwdLjIRitTXhtNo9DJTPHOr5ZrWiFiIQZMBwEbtDS2Od7g3yyCULFCmgUSTDESUEyUiwZxwvOz5x6eRYjFxhmd6dmAjZ/An4CeqDAoVpMe4p5TOU1XpZDGbYJBLP4dUuj4GP88Rz/PX7hX4Ig1ozeJDcdsrA7JxPNFRfWLdeGeaeSapS8OpkN+S7vCXbId8d0xy/O37iU4Yp0zfkjfZdMGJZCAYaY68Iq1R+/bzoWbzGbhh8PtxZIVHJ/7xy8Yjqlh8cSiMxQ2K5rS9qij8CYPit7pTsn1Db1Ffw9Xeiv8qe9mYk3RmbpesWr0Ghyxhq4R6Ey+rdHTxh3+3ROpGmNl6EXabBvd7XahGN9/zfKiwlwjXKw9NzaxFmQyXqjG68Ke4ZwJ3zTmFrRSUYgSzOY2wphJP79++fr1SwukVZe9SKhY+SLtFbNodEkt3YhZAzpxDwFN9lXqfphGxLJUePuS4bVHK69YeYTZKs1kqtV16GdjT4bHtA8SHrAcO0vbD03+Mk4ijF9Wb1xevvTOo1kBoG4D3LdU3ZMQUS+SlXhulHdnjQYOnYx2IN1lu9PNig1+lF/KbxiqvqusqzrApbdH1DllNd6SG50JAMudqR/a4qWGf7K+Gca/3zNStQMVrXVi+bSSlqFhfx0LKq/1Os9cLc0VzlTCu2r85325gf5ZvKkEL7NOLBXIUzZ7pLdPXcbqAy2+OwMCM3KkWYqPqsrFAWq/vm84lNt+F4xxGQMw5SyaZqnx5is0kjhzIzozSLUUv4i3SrgO5UOj7WrVCDErKUalFNAMPrFY1G8dp2P8EKbnh3m4bciC6n9/azs0OmFmJXnEUl28krtqJXVDOgMxXDOiNpBiKf5q63pD72eqVXvCuw4VS5V7NsuRCti0xc0fGGOPlSbRsh+t5gxCJ51bsmXiAA3GrH77nV+aDM3g91ozT5JHHIZmSYFCTCiuJaqG63J5Pdk5YjHcJmSpyoefP3YIH3/tKYAbHzgTaSnP1ESdSTNTdAAxts7R8Rx54R6BWUQEqW346W0hlqH9TqW6+4DmGPx5K08stsLpOAxj7cp1yLl8sMV3w4W+l14pnqmGJJVK/bPzkZEKq87fX8AVi02KSYRi4mic4TCypXpKJcC9TSfR0Ph0h6XqdrFUn6B9HoVr8XyxmDkwII1iBp3oGkvUamx6pXhzw1Vo5cPnj10bJJXq9Ne3UsrAF4speigk5DF5E+SMZXl3l9Y08n6nVYrfqEgKlcUf97ZWH+8/f2J2KfHLR7EsyxHrml0hCy0bmJpOxjhaFuUD0ikBNpOLBUHvj/t7S6r7+88f2FC6Zo7PF4vJ1539Z+xGK1ULGWGvDOgkBKUYPeAbfDKxkk6jLauqWNzf/9UD3sGUX9jkilUKi+ZsodsI7sSa6XTdME7uk1IJMKFlQVB0par8qSn+hia3LJPJsxT3aI+5GCOvFzWX+FxELGaEUoEPZgE3FT9MFLMMY/zT/cQ2qs+fYMjYoCQUK3/KbljTaXjyrKFAwFRwroq2NROxaJlP7V2VvNCkJJ1SvBlfLEWefr2fYO4rf/WU0Am4ESPAq8vBKeZ6Z1b0CM5W+nw3UQGL2clVszS40Mi+EEcsOjwEEwRmuTsVP8zHTB2gov05Ifz0SQ74H7fBQbHQJMnBexZ25VDa8d1FaGDHUtyVCCIWXZqQ/bvhPDEmnVJ8rAKNoRS/1Gy+/rUE/MSGXw6JrjEq3owqajHTFosWF8JyfRoP0ynFLyPVggBOv1axUNXal6Kxdi1I597ASLGMkW/QW0bUVi2xaPk4bBY5TbkUP466gWDxpVat4p8vQ7/jBADcakiUWMoycGhx7SGWWEzIDZsAMolRKqX44H45j1Ly7Ku1/7j6ZSivcT8X7nXWi6XqYZXy6Zr9yop1X06ZYSPsqvTzqZTiT7jDIVTg+Iu1UfsbVipOKWdNUXLtuqG+DC9blUahD1jg5aCZZYg0iIQn6cy80UjBDzkzaVUBxcG3PsI8H6txbMpqMb/6FCqWih+P1eGY7yKDUeBhPtXQl6d2z1uu6anh078rxg/TKMVrwXunGkrv1Pz77371ataLjFMMawboa1kLMlqMp6fN9bf8CqVWwDDcJ4+V5czVhTlpeGFhb+R+QE7DD/0VDpQF9XawUtYT0kaytZ9snm9tncycZ9qvS9/1icNLNmhBRbdsyjwfaiFPSEeQ9aNF3589ujSiyOOTfL91OoZ6+GwmgsC24v8/7G2+KlxOzy8HFz2Y3KIcYm55+SdjZW6qViyOULiCgUdm4pPy7p6niZWsBJ88Skzq+zc5dMrd6A9lxXkam5WD5eLMOMrte99orMqPdGkpxsJbLOIsHqfCbq6A/yucOZrNczePdGkphYdRMFk9ghWEiFXP1ckbt7mzx7q2lM5OyceKWCFiPS5bPWxoE2tjT7XKe4Hpe56tDn3S2oKItR8uVr/mOS5wle2JqmpFAyOnIZN6DjG39+ZWC/jFAdnOVa6Xpe4tfoN0rbaP/3xTqFjH1Un3C3VrGLTEmtRf5R729/frbRTg62/w+436SurO0XG77mMw5Rt80m69nqZk+W39MPoRm3aOgMPyxHnRkezu7+7br88sXSrOn3P2C9LVh1zZFavrfGKFbewIv7+fmxfIm/YB/Vv3PDV/c7bhZDtHVCKdEHVujuxossJi9XO5h25fmsxJLw5Qd247kwpSzLIR9NlKX6p2br1ivWLEqrbnyErtLaz7uV1brFzuVXtSQYpZfoo+mKt3J5XyQ8piecrViQldYvdyk5vbv9RQh1e5XJ90/4iI1bZez3OvJEtYIg82vHCx2JhFxWpI9ums0RGdxs6/ammLJS22CFvRGy9Qw5ntpmfYeTAdW4gDp98NS8W2o6UFT6x6UKxdz1l3LeWlLMTKaxvvAdSjqw0rNm9EEYvs/+7bUcsVy+4mkqdA1Uog1pF7BBbHMbQMxJLMTTd56zH2bB44dx1D3QzZWFlixCJ/scawcsUWbFOxkERkDpmBWFJL3ci29Dj76o7YpKhD3ezBcki/WFUyjFn2talY1H6zEEtqyRvErVhaoQ56xXIs6yZULNTf1RFW61bayrKyFEsyR0nHRDXmM8z7TrDFdGnj7bgSFAvRrxxZjrSpWH0ni8tILGkv4bdCGXLMDRcNRgWpynYD3/1QsSQsZdkN11JQrAPyMU6Av3FKORmJhTfVxQ/zKoj7vWy4vSRbkCa41yTck4TLJ5abZJxhu6OB+sYjVsHJ3HhirRyNClmJJbW0uK5oJNkyXSB5Z21et4KW9aJCJPSJVSaG17CTs5ytSvcs5xGr4aZuHLGQAefK3e4q9ekOyyzWAnSyb96U+q/QXKRQmNtzQ5SyH7Q7SMAH648BsdCfC4VbIiXq7UOhgI4/84iFtdgvzFdcsfA9sQfVDMWSzGHk4irkfwMkhz6Z5B5ZQxSZN8/tFOLICT+2WLUD0ktSLZ5bL26rZCI9J7Go60yk67bp1R2/dKPcBM0Oz+q1apZiIV8crvlqZeurLzfYOVDtNsodp9WV1cHByll4mFQmzkcq5P92udF1s/jO/kEBj4vdmvfTHfShqvuG+36/W3EPxb9MPNOnDDB3NBCuFwSQ96WqT5T2I9Tom7OlAjzfswcNBWjDk3/KWioxp/4NKdlkjHk5K2qAfGmFLi+m549WaU+B3VdvupNK4ybbkOUjb7ZaLfOpfWF2NM444aTAgjV0rPnlWeER7eofTZ+7RiQQCAQCgUAgEAgEAoFAIBAIBAKBQCAQCAQCgUAgEAgEgoz5HzqcUhwrhsgIAAAAAElFTkSuQmCC" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8" id="about">
    <div class="card-body">
          <h1 class="card-title" style="letter-spacing: 5px;font-weight: 900;font-size:3rem; color:blue" >Qui sommes-nous ?</h1>
          <p class="card-text">Venez nombreux rêver et bâtir avec nous le nouveau monde POST-COVID, rejoignez-nous pour changer tous ensemble le monde et l’humanité

            Nous devons nous remettre en question après une telle pandémie inédite, de si grande envergure. Une secousse terrible et une grande tempête qui ont fait trembler et ébranler le monde qui tient encore debout malgré et en dépit de tout.

            Posons-nous de bonnes et vraies questions, et apportons de même de bonnes et vraies réponses à ces mêmes et vraies questions. Projetons-nous avec un sursaut d’orgueil pour rebondir et avancer à grands pas de géants dans l’avenir

            Le monde et la planète toute entière ont été profondément bouleversés et ébranlés aux plans conjoncturels comme structurels, dans tous leurs édifices, tous leurs pans, tous leurs étages et tous les compartiments de nos sociétés. </p>
        <p class="card-text"><small class="text-muted"><a href="javascript:document.getElementById('re001').style.display='block';document.getElementById('re001').releaseCapture();">
            <u>Lire la suite</u></a>
        </p>
            <div id="re001" style="display: none;">
            <div style="">Du jamais  vu par le commun des mortels, dans la vie de l’espèce humaine par temps modernes.  Un événement planétaire qui mérite une réflexion pour remodeler le vieux monde, construire le nouveau monde POST-COVID , un défi de taille.
                Cela ne peut se faire que par de nouveaux bâtisseurs, des acteurs d’un nouveau genres. Qui rompent avec nos habitudes passéistes et nos réflexes obsolètes, aux plans sanitaires, économiques, financiers, sociétaux et  culturels
                Nos comportements et modes de vie doivent changer  et évoluer, un monde nouveau est à construire à l’échelle individuelle et collective, mains dans les mains et tous ensembles.
                Dans un mouvement sans commune mesure fraternel et solidaire, la marche ne doit pas se faire,  comme nous l’avons tous observé et constaté, dans la gestion calamiteuse de la pandémie, sans boussole et en rang dispersé, dans une mer houleuse et très agitée.
                Nous devons plus que jamais, nous remettre en question et nous relever sans délais et sans plus attendre, soyons et restons  debout.
                Notre vocation et ambition chez BCA Consulting, s’inscrire dans le nouveau deal et le nouvel ordre mondial pour relever les grands défis du futur qui nous attendent
                En structurant et en constituant un grand maillage d’un vaste réseau mondial, d’équipes d’hommes et de femmes  où chacun apporte ses compétences et son savoir, tel le Fil d’Ariane  d’une araignée qui tisse la toile du monde de demain, en mutualisant nos forces .
                Nous devons dans un élan collectif et non individualiste, relever les défis colossaux de demain, en ayant une forte emprise sur les nouvelles donnes. Nous devons arpenter des pentes raides et abruptes, emprunter des pistes sinueuses, et marcher sur des sentiers non battus, pour sortir plus jamais d’un confinement de masse, qui restera derrière nous.
                Nous devons maintenir les bons caps vertueux pour challenger ce nouvel ordre mondial et ces nouveaux défis, en réinventant nous- mêmes notre propre quotidien. Chaque maillon de la chaîne est indispensable et ne doit souffrir d’aucune faiblesse.
                Cette toile d’araignée, nous le répétons, se tissera méticuleusement ensemble avec les qualités humaines et les compétences de l’espèce rare. Du métier de tisserand en voie de disparition à faire renaître. Sans oublier l’usage de l’art de la sculpture et des techniques de  la reine des abeilles et de ses ouvriers très disciplinés et attelés au travail, à construire une ruche pour produire le meilleur des sucs du miel pur.
                Nous croyons que chacun a sa place dans ce monde et mérite une toute petite portion, d’une toute petite parcelle de la terre du bonheur au soleil levant et couchant, avec la sueur de son front, son propre talent à faire fructifier, à la recherche de son propre épanouissement.
                Nous nous  inscrivons et nous  projetons dans ce nouveau monde, où chacun dans son individualité, son don, son savoir, peut les ajouter et les empiler les uns aux autres , dans un mouvement d’entraînement et  collectif d’ensemble où chacun  peut apporter sa toute petite pierre au grand édifice, pour atteindre son idéal en y croyant de pieds ferme.
                Tels sont nos crédos, nos valeurs et nos outils chez BCA Consulting. Venez donc très nombreux et nombreuses rejoindre nos équipes, pour adhérer et partager cette vision du nouveau monde  qui est une aventure exaltante dans le dépassement de soi.
                Alors  venez avec nous comme une seule femme et un seul homme, pour faire bouger les lignes de forces du monde meilleur qui nous attend, et où nous le répétons, chacun de nous méritera une toute petite portion, d’une toute petite parcelle de la terre du bonheur au soleil levant et couchant
                Notre pensée universelle et éclectique, et notre approche ouverte aux grands horizons, s’inscrivent dans une démarche porteuse  de perspectives positives d’avenir et d’un processus dynamique, qui définissent les angles d’attaques de notre politique, de croissance, de notre stratégie de gouvernance, et de notre tactique de transformation du monde à l’image de son créateur
                Nos orientations avisées et éclairées participent de cette construction et de l’élaboration méticuleuse, précise et ciblée de projets ambitieux et osés. La volonté céleste et divine alimentera,  coiffera et fera le reste de tout cela.</div>
            <a href="javascript:document.getElementById('re001').style.display='none';document.getElementById('re001').releaseCapture();">
                <u>FERMER</u>
            </a>
            </div></small></p>
    </div>
    </div>
    </div>
    </div>
    </div>
  <div class="container" style=" position: relative;
width: full;
margin: 0 auto;">
    <img src="https://www.hubspot.com/hubfs/Consultant%20using%20fast%20tips%20to%20win%20consulting%20clients.jpg" alt="Notebook" style="width:100%;">
    <div class="content" style="position: absolute; /* Position the background text */
    bottom: 0; /* At the bottom. Use top:0 to append it to the top */
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
    color: #f1f1f1;
    width: 98%;
    padding: 110px;">
      <h1 style="font-size: 4rem; color: rgb(62, 202, 226)" >NOUS VOUS AIDONS À RÉUSSIR VOS CAPS DE TRANSFORMATION</h1><br>
        <p>* Création et Développement des Affaires</p>
        <p>* Direction, Pilotage, Gestion et Coordination de projets</p>
        <p>* Management de Processus</p>
        <p>* Accompagnement au changement</p>
        <p>* Développement Digital & Création</p>
        <p>* Coaching et Mentoring</p>
    </div>
  </div>

<br>
<div class="container" style="width: 500px height: 500px border: 10px black solid">
  <div class="card-group col-md-12 ">
    <div class="card">
      <img src="https://www.currentschoolnews.com/wp-content/uploads/2022/09/images2546-5c1d8b4ad8f39-1024x683-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 3rem">Nous somme Qui?</h5>
        <p class="card-text">Venez nombreux rêver et bâtir avec nous le nouveau monde POST-COVID, rejoignez-nous pour changer tous ensemble le monde et l’humanité Nous devons nous remettre en question après une telle pandémie inédite, de si grande envergure...</p>
      </div>
      <div class="card-footer">
        <a href="#about">
        <small class="text-muted">read more..</small></a>
      </div>
    </div>
    <div class="card">
        <img src="https://www.b2b-infos.com/wp-content/uploads/eb46cfcb3fd008763f64cb8a7f99f313-1.jpe" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 3rem">Nos services</h5>
        <p class="card-text">Elle repose sur notre expertise méthodologique, fonctionnelle et Opérationnelle, qui nous permet de proposer à
            nos clients un accompagnement personnalisé. Avec l'appropriation forte des enjeux de nos clients, afin de coconstruire avec eux
            une organisation à la fois performante, durable, innovante et surtout adaptée ...</p>
    </div>
    <div class="card-footer">
        <a href="{{route('contact.create')}}">
            <small class="text-muted">read more..</small></a>
        </div>
    </div>
    <div class="card">
      <img src="https://ipso.biz/wp-content/uploads/2015/09/coissance.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 3rem">Plan Quinquennal</h5>
        <p class="card-text">Notre plan quinquennal 2022-2027, porte sur nos perspectives, nos prospectives, nos engagements sur la création et le développement des affaires, sur quatre axes de nos  projets phares ...</p>
    </div>
    <div class="card-footer">
        <a href=""><small class="text-muted">read more..</small></a>
    </div>
    </div>
    <div class="card">
        <img src="https://previews.123rf.com/images/edhar/edhar1611/edhar161100345/66015221-closeup-of-happy-businessman-and-cheering-business-team-on-office-background.jpg?fj=1" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size: 3rem">About</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <a href="{{route('about.create')}}">
                <small class="text-muted">read more..</small>
            </a>
        </div>
      </div>
  </div>
</div>

<div class="accordion" id="accordionPanelsStayOpenExample" style="border: 15px rgb(255, 255, 255) solid">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                NOS DOMAINES D’INTERVENTIONS
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Nous accompagnons  le développement de vos affaires, ainsi que vos projets de bout en bout, en  identifiant
                 vos besoins et vos attentes. La formalisation du cadre et des processus projets, le diagnostic des outils,  sont
                  autant d’étapes fondamentales pour répondre à vos besoins et vos enjeux stratégiques.
                Grâce à notre expertise, nous vous apporterons les meilleures solutions adaptées  à  vos objectifs.</strong>
                <p>* Définir la politique de gouvernance et d’optimisation de votre business</p>
                    <p>* Définir les budgets, les financements et les ressources de vos affaires et de vos projets</p>
                        <p>* Définir  et cadrer les besoins et les attentes</p>
                            <p>* Fixer la stratégie et les objectifs, </p>
                                <p>* Analyser et étudier des solutions optimales</p>
                                    <p>* Proposer des stratégies fiables et éprouvées</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                LES ENJEUX
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>* Maîtriser les finances et les budgets</p>
                    <p>* Maîtriser le planning et limiter les risques</p>
                        <p>* Mobiliser les ressources en adéquation avec les objectifs à atteindre</p>
                            <p>* Optimiser la qualité de nos services et la satisfaction client</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                NOS PARTENAIRES
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><div class="col-md-2"><img src="https://www.icone-png.com/png/53/53256.png" class="rounded float-start" width="110" />
                    <img src="http://img0cf.b8cdn.com/images/logo/73/1991173_logo_1507821008_n.png"  width="120" />
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/OCP_Group.svg/1200px-OCP_Group.svg.png" width="50" />
                </div></p>
            </div>
          </div>
        </div>
      </div>
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="mb-3 col-6 col-md-2 mg-4">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Dashboard</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Features</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Pricing</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">FAQs</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">About</a></li>
          </ul>
        </div>

        <div class="mb-3 col-6 col-md-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Dashboard</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Features</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Pricing</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">FAQs</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">About</a></li>
          </ul>
        </div>

        <div class="mb-3 col-6 col-md-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Dashboard</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Features</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">Pricing</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">FAQs</a></li>
            <li class="mb-2 nav-item"><a href="#" class="p-0 nav-link text-muted">About</a></li>
          </ul>
        </div>

        <div class="mb-3 col-md-5 offset-md-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p><br>
            <div class="gap-2 d-flex flex-column flex-sm-row w-100">
                <a href="{{route('post.create')}}"><button class="btn btn-primary" type="button">Subscribe</button></a>
                <h3>Contact Us!</h3>
                <label>Email:</label>
                <a href="mailto: insertemailhere@xyz.com?subject=Mail from xyz.com" target="_blank">insertemailhere@xyz.com</a>
            </div>
          </form>
        </div>
      </div>

      <div class="py-4 my-4 d-flex flex-column flex-sm-row justify-content-between border-top">
        <p>© 2022 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
@endsection
