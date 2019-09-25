{#
/**
 * @file
 * Default view template to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 *
 * @ingroup themeable
 */
#}

<!-- <div class="hero_carousel"> -->

    <!-- <div class="type_data_">{{ fields.field_type.content }} </div> -->

{% set i = 0 %}
<div class="carousel-item {% if(i == 0) %}active{% endif %}" id="car{{i}}" onclick="hit(this)">
	

    {% if fields.field_type.content == 'Image'  %}
    	<div class="_article_bg_img" style="background-image: url('{{ fields.field_carousel_image.content }}');">
		</div> 
    	<!-- <img src={{ fields.field_carousel_image.content }} data-counter={{ fields.counter.content }} data-fieldtype={{ fields.field_type.content }} > -->
	{% else %}
		<!-- <iframe src='https://player.youku.com/embed/{{ fields.field_youku_video_id.content }}==' frameborder=0 allowfullscreen></iframe> -->
		<!-- <div class="youkuv">{{ fields.field_youku_videoid.content }}</div> -->
		<div class="_article_iframe">
			<iframe  src="https://player.youku.com/embed/{{ fields.field_youku_video_id.content }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
			
    {% endif %}
    {% set i = i+1 %}
</div>
					