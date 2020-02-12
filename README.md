# RuangAdmin

RuangAdmin - Free Admin Control Panel Themes Based on Bootstrap 4

-------------------

**RuangAdmin** is responsive admin template. Based on Bootstrap 4 Framework. Highly cusmtomizable and easy to use. 

!["RuangAdmin Screenshot"](https://indrijunanda.github.io/RuangAdmin/img/screenshot/ss1.png "RuangAdmin Screenshot")

## Table of contents

- [Link RuangAdmin](https://github.com/indrijunanda/RuangAdmin.git)
- [Installation](#installation)
- [Usage](#usage)
- [License](#License)

## Installation 

**Here is how :** 

- Fork the repository
- Clone with ```git clone https://github.com/Codeigniter-Template/Ruang-Admin-Template.git```
- Or Download zip

## Usage 

- Create a new Controller at `view/views` then put like this:
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

<!-- Your Content -->

</div>
```

- Create a new Controller at `application/controllers` then put like this:
```
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('_layout/footer');
    }
}
``` 

## License

RuangAdmin is an open source and that is licensed under **[MIT](http://opensource.org/licenses/MIT)**




