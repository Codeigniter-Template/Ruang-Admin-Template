<!-- Container Fluid -->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buttons</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Bootstrap UI</li>
            <li class="breadcrumb-item active" aria-current="page">Buttons</li>
        </ol>
    </div>

    <!-- row -->
    <div class="row">
        <!-- Basic Button -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Bootstrap includes several predefined button styles, each serving its own
                        semantic purpose, with a
                        few extras thrown in for more control.</p>
                    <button type="button" class="btn btn-primary mb-1">Primary</button>
                    <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                    <button type="button" class="btn btn-success mb-1">Success</button>
                    <button type="button" class="btn btn-danger mb-1">Danger</button>
                    <button type="button" class="btn btn-warning mb-1">Warning</button>
                    <button type="button" class="btn btn-info mb-1">Info</button>
                    <button type="button" class="btn btn-light mb-1">Light</button>
                    <button type="button" class="btn btn-dark mb-1">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                </div>
            </div>
        </div>

        <!-- Outline Buttons -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Outline Buttons</h6>
                </div>
                <div class="card-body">
                    <p>In need of a button, but not the hefty background colors they bring? Replace the
                        default modifier
                        classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to
                        remove all background
                        images and colors on any button.</p>
                    <button type="button" class="btn btn-outline-primary mb-1">Primary</button>
                    <button type="button" class="btn btn-outline-secondary mb-1">Secondary</button>
                    <button type="button" class="btn btn-outline-success mb-1">Success</button>
                    <button type="button" class="btn btn-outline-danger mb-1">Danger</button>
                    <button type="button" class="btn btn-outline-warning mb-1">Warning</button>
                    <button type="button" class="btn btn-outline-info mb-1">Info</button>
                    <button type="button" class="btn btn-outline-light mb-1">Light</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Dark</button>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Sizing Buttons -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sizing Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Use Font Awesome Icons (included with this theme package) along with the sizing buttons as shown in
                        the examples below!</p>
                    <!-- Buttons (Default) -->
                    <div class="mb-2">
                        <code>.btn</code> only
                    </div>
                    <a href="#" class="btn btn-primary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                    <!-- Buttons (Small) -->
                    <div class="mt-4 mb-2">
                        with <code>.btn-sm</code>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-sm">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-sm">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                    <!-- Buttons (Large) -->
                    <div class="mt-4 mb-2">
                        with <code>.btn-lg</code>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-lg">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-lg">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-lg">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-lg">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
            <!-- Brand Buttons -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Brand Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Google and Facebook buttons are available featuring each company's respective
                        brand color. They are used on the user login and registration pages.</p>
                    <p>You can create more custom buttons by adding a new color variable in the
                        <code>_variables.scss</code> file and then using the Bootstrap button variant mixin to create a new
                        style, as demonstrated in the <code>_buttons.scss</code> file.</p>
                    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google fa-fw"></i>.btn-google</a>
                    <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f fa-fw"></i>.btn-facebook</a>
                </div>
            </div>
        </div>
        <!-- Split Buttons with Icon -->
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                </div>
                <div class="card-body">
                    <p>Works with any button colors, just use the <code>.btn-icon-split</code> class and
                        the markup in the
                        examples below. The examples below also use the <code>.text-white-50</code>
                        helper class on the
                        icons for additional styling, but it is not required.</p>
                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Primary</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Split Button Success</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Split Button Info</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Split Button Warning</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Split Button Danger</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Split Button Secondary</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-light btn-icon-split">
                        <span class="icon text-gray-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Split Button Primary</span>
                    </a>
                    <div class="mb-4"></div>
                    <p>Also works with small and large button classes!</p>
                    <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Small</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Large</span>
                    </a>
                </div>
            </div>
            <!-- Disabled Buttons -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Disabled Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Make buttons look inactive by adding the <code class="highlighter-rouge">disabled</code> boolean
                        attribute to any <code class="highlighter-rouge">&lt;button&gt;</code> element.
                    </p>
                    <button type="button" class="btn btn-primary mb-1" disabled>Primary</button>
                    <button type="button" class="btn btn-secondary mb-1" disabled>Secondary</button>
                    <button type="button" class="btn btn-success mb-1" disabled>Success</button>
                    <button type="button" class="btn btn-danger mb-1" disabled>Danger</button>
                    <button type="button" class="btn btn-warning mb-1" disabled>Warning</button>
                    <button type="button" class="btn btn-info mb-1" disabled>Info</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Documentations Link -->
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/buttons/" target="_blank">
                    bootstrap buttons documentations.</a></p>
        </div>
    </div>
</div>
<!-- Container Fluid -->
