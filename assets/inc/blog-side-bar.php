<div class="col-lg-3">
    <div class="sidebar sidebar__right">
        <div class="sidebar__single sidebar__search">
            <form action="#" class="sidebar__search-form">
                <input type="search" name="search" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form><!-- /.sidebar__search-form -->
        </div><!-- /.sidebar__single -->
        <div class="sidebar__single">
            <h3 class="sidebar__title">Practice Areas</h3><!-- /.sidebar__title -->
            <ul class="list-unstyled sidebar__cat-list">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM `practicearea`");

                foreach ($sql as $row) {
                ?>

                    <li>
                        <a href="practice-area.php?slug=<?= $row['slug'] ?>">
                            <i class="fa fa-long-arrow-alt-right"></i>
                            <?= $row['name'] ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul><!-- /.sidebar__cat-list -->
        </div><!-- /.sidebar__single -->

        <div class="sidebar__single">
            <div class="sidebar__cta">
                <h3 class="sidebar__cta-title">At Opklim, We Always Put Our Clients First</h3><!-- /.sidebar__cta-title -->
                <p class="sidebar__cta-text">Sit amet consectetur adipisicing elit eor incididuynt uet labore.</p><!-- /.sidebar__cta-text -->
                <a href="#" class="thm-btn sidebar__cta-btn">get in touch <i class="fas fa-long-arrow-alt-right"></i></a>
            </div><!-- /.sidebar__cta -->
        </div><!-- /.sidebar__single -->
        <div class="sidebar__single">
            <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
            <div class="sidebar__tags-list">
                <?php
                foreach ($sql as $row) {
                ?>
                    <a href="practice-area.php?slug=<?= $row['slug'] ?>"><?= $row['name'] ?></a>

                <?php
                }
                ?>
            </div><!-- /.sidebar__tags-list -->
        </div><!-- /.sidebar__single -->
    </div><!-- /.sidebar -->
</div><!-- /.col-lg-3 -->