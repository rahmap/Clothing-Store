<?php 
namespace App\Libraries;

class FreeLib {

  public function alertBS($message, $title, $type)
  {
    return '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <strong>'.$title.'</strong> '.$message.'
            </div>';
  }

  public function sweetAlert($title = '', $text = '', $type = '')
    {
      return "<script>
      var title = '$title';
      var text = '$text'; 
      var type = '$type';
        Swal.fire(title,text,type);
      </script>";
    }


    public function sweetAlertHref($title = '', $text = '', $type = '', $href = '')
    {
      return "<script>
      var title = '$title';
      var text = '$text'; 
      var type = '$type';
        Swal.fire(title,text,type).then(function() {
                window.location = '$href';
            });
      </script>";
    }

}