<?php
  $output = '<script type="text/javascript">
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "rtl": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
  ';

  if (isset($_SESSION['notifications'])) { 
    $notifcs = $_SESSION['notifications'];

    foreach ($notifcs as $n ) {
      $output .= ' toastr["' . $n->type . '"]("' . $n->message . '");';
    }

    $output .= '</script>';
    echo $output;

    $_SESSION['notifications'] = [];
  }
?>