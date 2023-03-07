<!DOCTYPE html>
<html lang="en">
@include('head')
    <body>
      <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
          <span class='sr-only'>Loading...</span>
        </div>
      </div>

        <div class="page-container">
          <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
              <div class="" id="navbarNav">
                <ul class="navbar-nav" id="leftNav">
                  <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                  </li>
                </ul>
                </div>
                <div class="logo">
                  <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="" id="headerNav">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                        <form>
                          <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                        </form>
                        <h6 class="dropdown-header">Recent Searches</h6>
                        <a class="dropdown-item" href="#">charts</a>
                        <a class="dropdown-item" href="#">new orders</a>
                        <a class="dropdown-item" href="#">file manager</a>
                        <a class="dropdown-item" href="#">new users</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                      <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                        <h6 class="dropdown-header">Notifications</h6>
                        <a href="#">
                          <div class="header-notif">
                            <div class="notif-image">
                              <span class="notification-badge bg-info text-white">
                                <i class="fas fa-bullhorn"></i>
                              </span>
                            </div>
                            <div class="notif-text">
                              <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                              <small>19:00</small>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="header-notif">
                            <div class="notif-image">
                              <span class="notification-badge bg-primary text-white">
                                <i class="fas fa-bolt"></i>
                              </span>
                            </div>
                            <div class="notif-text">
                              <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                              <small>18:00</small>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="header-notif">
                            <div class="notif-image">
                              <span class="notification-badge bg-success text-white">
                                <i class="fas fa-at"></i>
                              </span>
                            </div>
                            <div class="notif-text">
                              <p>faucibus dolor in commodo lectus mattis</p>
                              <small>yesterday</small>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="header-notif">
                            <div class="notif-image">
                              <span class="notification-badge">
                                <img src="../../assets/images/avatars/profile-image.png" alt="">
                              </span>
                            </div>
                            <div class="notif-text">
                              <p>faucibus dolor in commodo lectus mattis</p>
                              <small>yesterday</small>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="header-notif">
                            <div class="notif-image">
                              <span class="notification-badge">
                                <img src="../../assets/images/avatars/profile-image.png" alt="">
                              </span>
                            </div>
                            <div class="notif-text">
                              <p>faucibus dolor in commodo lectus mattis</p>
                              <small>yesterday</small>
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
                      <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                        <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                        <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                        <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                        <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                        <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                      </div>
                    </li>
                  </ul>
              </div>
            </nav>
        </div>
            <div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">
                    Main
                  </li>
                  <li>
                    <a href="index.html"><i data-feather="home"></i>Dashboard</a>
                  </li>
                  <li class="sidebar-title">
                    Apps
                  </li>
                  <li>
                    <a href="email.html"><i data-feather="inbox"></i>Email</a>
                  </li>
                  <li>
                    <a href="calendar.html"><i data-feather="calendar"></i>Calendar</a>
                  </li>
                  <li>
                    <a href="social.html"><i data-feather="user"></i>Social</a>
                  </li><li>
                    <a href="file-manager.html"><i data-feather="message-circle"></i>File Manager</a>
                  </li>
                  <li class="sidebar-title">
                    Elements
                  </li>
                  <li>
                    <a href="index.html"><i data-feather="code"></i>Components<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="alerts.html"><i class="far fa-circle"></i>Alerts</a></li>
                      <li><a href="typography.html"><i class="far fa-circle"></i>Typography</a></li>
                      <li><a href="icons.html"><i class="far fa-circle"></i>Icons</a></li>
                      <li><a href="badge.html"><i class="far fa-circle"></i>Badge</a></li>
                      <li><a href="buttons.html"><i class="far fa-circle"></i>Buttons</a></li>
                      <li><a href="dropdowns.html"><i class="far fa-circle"></i>Dropdowns</a></li>
                      <li><a href="list-group.html"><i class="far fa-circle"></i>List Group</a></li>
                      <li><a href="toasts.html"><i class="far fa-circle"></i>Toasts</a></li>
                      <li><a href="modal.html"><i class="far fa-circle"></i>Modal</a></li>
                      <li><a href="pagination.html"><i class="far fa-circle"></i>Pagination</a></li>
                      <li><a href="popovers.html"><i class="far fa-circle"></i>Popovers</a></li>
                      <li><a href="progress.html"><i class="far fa-circle"></i>Progress</a></li>
                      <li><a href="spinners.html"><i class="far fa-circle"></i>Spinners</a></li>
                      <li><a href="accordion.html"><i class="far fa-circle"></i>Accordion</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="index.html"><i data-feather="gift"></i>Plugins<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="block-ui.html"><i class="far fa-circle"></i>Block UI</a></li>
                      <li><a href="session-timeout.html"><i class="far fa-circle"></i>Session Timeout</a></li>
                      <li><a href="tree-view.html"><i class="far fa-circle"></i>Tree View</a></li>
                    </ul>
                  </li>
                  <li class="active-page">
                    <a href="index.html" class="active"><i data-feather="edit"></i>Form<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="form-elements.html" class="active"><i class="far fa-circle"></i>Form Elements</a></li>
                      <li><a href="form-layout.html"><i class="far fa-circle"></i>Form Layout</a></li>
                      <li><a href="form-validation.html"><i class="far fa-circle"></i>Form Validation</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="cards.html"><i data-feather="layers"></i>Cards</a>
                  </li>
                  <li>
                    <a href="index.html"><i data-feather="list"></i>Tables<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="tables.html"><i class="far fa-circle"></i>Basic Tables</a></li>
                      <li><a href="data-tables.html"><i class="far fa-circle"></i>Data Tables</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="charts.html"><i data-feather="pie-chart"></i>Charts</a>
                  </li>
                  <li class="sidebar-title">
                    Other
                  </li>
                  <li>
                    <a href="index.html"><i data-feather="star"></i>Pages<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="invoice.html"><i class="far fa-circle"></i>Invoice</a></li>
                      <li><a href="404.html"><i class="far fa-circle"></i>404 Page</a></li>
                      <li><a href="500.html"><i class="far fa-circle"></i>500 Page</a></li>
                      <li><a href="blank-page.html"><i class="far fa-circle"></i>Blank Page</a></li>
                      <li><a href="login.html"><i class="far fa-circle"></i>Login</a></li>
                      <li><a href="register.html"><i class="far fa-circle"></i>Register</a></li>
                      <li><a href="lockscreen.html"><i class="far fa-circle"></i>Lockscreen</a></li>
                      <li><a href="price.html"><i class="far fa-circle"></i>Price</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"><i data-feather="check-circle"></i>Documentation</a>
                  </li>
                </ul>
            </div>
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Basic Example</h5>
                                    <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
                                    <form>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Disabled forms</h5>
                                    <p class="card-description">Add the <code>disabled</code> boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
                                    <form>
                                        <fieldset disabled>
                                          <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Disabled input</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                          </div>
                                          <div class="mb-3">
                                            <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-select">
                                              <option>Disabled select</option>
                                            </select>
                                          </div>
                                          <div class="mb-3">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                              <label class="form-check-label" for="disabledFieldsetCheck">
                                                Can't check this
                                              </label>
                                            </div>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </fieldset>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">File input</h5>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                        <input class="form-control" type="file" id="formFileDisabled" disabled>
                                      </div>
                                      <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Small file input example</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                      </div>
                                      <div>
                                        <label for="formFileLg" class="form-label">Large file input example</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Color</h5>
                                    <label for="exampleColorInput" class="form-label">Color picker</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Select</h5>
                                    <p class="card-description">Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles. Custom styles are limited to the <code>&lt;select&gt;</code>’s initial appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations.</p>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Checks</h5>
                                    <p class="card-description">Our checks use custom Bootstrap icons to indicate checked or indeterminate states.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Default checkbox
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Checked checkbox
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Disabled</h5>
                                    <p class="card-description">Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate the input’s state.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                        <label class="form-check-label" for="flexCheckDisabled">
                                          Disabled checkbox
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                                          Disabled checked checkbox
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Radios</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Default radio
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Default checked radio
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Disabled</h5>
                                    <p class="card-description">Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate the input’s state.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                        <label class="form-check-label" for="flexRadioDisabled">
                                          Disabled radio
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                          Disabled checked radio
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Switches</h5>
                                    <p class="card-description">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Range</h5>
                                    <p class="card-description">Create custom <code>&lt;input type="range"&gt;</code> controls with <code>.form-range</code>. The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only Edge Legacy and Firefox supports “filling” their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.</p>
                                    <label for="customRange1" class="form-label">Example range</label>
<input type="range" class="form-range" id="customRange1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Input group</h5>
                                    <p class="card-description">Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                      </div>
                                      
                                      <label for="basic-url" class="form-label">Your vanity URL</label>
                                      <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                      </div>
                                      
                                      <div class="input-group">
                                        <span class="input-group-text">With textarea</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Wrapping</h5>
                                    <p class="card-description">Input groups wrap by default via <code>flex-wrap: wrap</code> in order to accommodate custom form field validation within an input group. You may disable this with <code>.flex-nowrap</code>.</p>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Button addons</h5>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                                      </div>
                                      
                                      <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Floating labels</h5>
                                    <p class="card-description">Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code> elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note that the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g., <code>~</code>).</p>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                      <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Selects</h5>
                                    <p class="card-description">Other than <code>.form-control</code>, floating labels are only available on <code>.form-select</code>s. They work in the same way, but unlike <code>&lt;input&gt;</code>s, they’ll always show the <code>&lt;label&gt;</code> in its floated state. Selects with <code>size</code> and <code>multiple</code> are not supported.</p>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                          <option selected>Open this select menu</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelect">Works with selects</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                                  
                </div>
              
            </div>
        
        <!-- Javascripts -->
        @include('footer')
</html>