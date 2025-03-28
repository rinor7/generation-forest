<?php 
$group_accordions = get_field('group_accordions');

if (!($group_accordions['disable_section'] ?? false)): ?>
<section class="accordion-section-one">
    <div class="container">
       <div class="inner-wrapper">
       <div class="row">
            <!-- Left Side with Image -->
            <div class="col-lg-6 left-side">
                <div class="image">
                <?php if (!empty($group_accordions['left_background_image']['url'])): ?>
                    <img src="<?php echo esc_url($group_accordions['left_background_image']['url']); ?>" 
                         alt="Left Background" width="100%" />
                <?php endif; ?>
                </div>
            </div>

            <!-- Right Side with Accordions -->
            <div class="col-lg-6 right-side">
                <div class="accordion" id="accordionExample">
                <div class="title"><?php echo esc_html($group_accordions['title-accordions']); ?></div>
                    <?php for ($i = 1; $i <= 8; $i++): 
                        $title = $group_accordions["accordion_{$i}_title"] ?? '';
                        $content = $group_accordions["accordion_{$i}_content"] ?? '';

                        if (!empty($title) && !empty($content)): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $i; ?>" aria-expanded="false"
                                        aria-expanded="false" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse<?php echo $i; ?>" 
                                        aria-expanded="false" 
                                        aria-controls="collapse<?php echo $i; ?>">
                                    <?php echo esc_html($title); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" 
                                 aria-labelledby="heading<?php echo $i; ?>" 
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo wp_kses_post($content); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; 
                    endfor; ?>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
<?php endif; ?>