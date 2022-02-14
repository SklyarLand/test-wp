<?php
/**
 * @var array $args
 * @var array $field
 */
$field = $args['field'];
?>
<div class="page-filter__category">

    <a href="#deadline" class="page-filter__category-link" data-toggle="collapse">
        <h3 class="page-title-h3"><?php echo $field['label']; ?></h3>
        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                fill="#111111" />
        </svg>
    </a>

    <div class="page-filter__category-list collapse show" id="deadline">
        <ul class="deadline">
            <li>
                <div class="radio">
                    <input type="radio" name="deadline" id="deadline-all" value="all" checked>
                    <label for="deadline-all">Любой</label>
                </div>
            </li>
            <?php foreach ($field['choices'] as $key => $label) :?>
                <li>
                    <div class="radio">
                        <input type="radio" name="deadline" value="<?= $key ?>" id="deadline-<?= $key ?>">
                        <label for="deadline-<?= $key ?>"><?= $label ?></label>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </div>

</div>
