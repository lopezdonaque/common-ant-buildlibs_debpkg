<?php

class CommonDebpkgInstallTask extends Task
{

  public $filename;


  public function main()
  {
    exec( "sudo dpkg -i {$this->filename}", $output, $return );
  }

}
