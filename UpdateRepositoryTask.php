<?php

class CommonDebpkgUpdateRepositoryTask extends Task
{

  public $fullname;

  public $filename;

  public $repo;


  public function main()
  {
    $this->log( "Removing deb package: {$this->fullname}" );
    exec( "sudo /usr/bin/reprepro -b /var/www/repos/apt/{$this->repo} --waitforlock 30 remove squeeze {$this->fullname}", $output, $return );

    $this->log( "Adding deb file: {$this->filename}" );
    exec( "sudo /usr/bin/reprepro -b /var/www/repos/apt/{$this->repo} --waitforlock 30 includedeb squeeze {$this->filename}", $output, $return );
  }

}
