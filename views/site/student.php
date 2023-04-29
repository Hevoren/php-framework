<main>
    <div class="main-flex-students">
        <div class="stud-list">
            <div class="students-title">
                <?php
                foreach ($groups as $group){
                    echo '<p class="stud-t">'. $group->group_name .'</p>';
                }
                ?>
            </div>
            <div class="stud-list-wrapper">
                <?php foreach ($students as $student) { ?>
                    <div>
                        <a href="<?= app()->route->getUrl('/pageStudent') . '?student_id=' . $student->student_id ?>">
                            <?= $student->surname ?>
                            <?= "&nbsp".mb_substr($student->name, 0, 1)."."?>
                            <?= "&nbsp".mb_substr($student->mid_name, 0, 1)?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>