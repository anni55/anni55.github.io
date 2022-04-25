<?php $url = '/' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="description" content="We simplify Financial Services Providers' life by leveraging digitization & automation technologies, so that employees make the most of their time at work and companies boost their productivity.">
  <meta name="keywords" content="Loan Origination System, Credit Scoring, Digital Field Application, Digital Financial Services, Lending platform, Financial Inclusion, Microfinance, SME lending, Rural and Agro lending, Fintech, Digitization, Digital Transformation, Big Data, SaaS, Cloud, Credit Bureau">
  
  <title>Juakali<?= empty($page_name) ? '' : ' | ' . $page_name;?></title>
	<link rel="stylesheet" href="./public/css/styles.css" type="text/css" media="screen, projection">
  <link rel="shortcut icon" href="./public/img/favicon.png">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <?= partial('partials/nav.php'); ?>

  <div class="content">
    <?= $content ?>
  </div> 

  <?= partial('partials/footer.php'); ?>
  <?= partial('partials/modal.php'); ?>
  <?= partial('partials/alert.php'); ?>

  <script>
    let mapPins = <?= json_encode(t('mapjuakali.data')); ?>;
  </script>
  <script src="./public/js/main.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143439362-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-143439362-5');
  </script>


</body>
</html>