<section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar__links">
                                <ul>
                                    <?php foreach ($productAndServicesDetails as $item): ?>
                                        <li>
                                        <a class="<?= ($item['url'] === $currentDetailUrl) ? 'current' : '' ?>" href="<?= base_url("products_and_services/" . $item['url']) ?>"><?= $item['label'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- /.service-sidebar__links -->
                            <div class="service-sidebar__call">
                                <div class="service-sidebar__call-bg" style="background-image: url(assets/images/services/service-widget-bg-1.jpg);"></div>
                                <!-- /.service-sidebar__call-bg -->
                                <h3>The sector Agriculture contributed 25% that is 1/4th of whole GDP of Uganda.</h3>
                            </div><!-- /.service-sidebar__call -->
                        </div><!-- /.service-sidebar -->
                    </div><!-- /.col-lg-4 -->
                    <?= view($dynamicContent) ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>