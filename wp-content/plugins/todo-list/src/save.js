/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */
export default function save(props) {
	const { attributes } = props;

	return (
		<div className="container">
			<div className="image">
				<img src={attributes.imgUrl} alt="Image Description" width={1080} />
			</div>
			<div className="content">
				<h2 className="title">{attributes.title}</h2>
				<h3 className="sub_title">{attributes.subtitle}</h3>
				<p className="paragraph">{attributes.paragraph}</p>
			</div>
		</div>
	);
}
