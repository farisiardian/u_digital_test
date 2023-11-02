/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

// src/index.js
import { MediaUpload } from "@wordpress/block-editor";
import { TextControl } from "@wordpress/components";

export default function Edit(props) {
	const { attributes, setAttributes } = props;

	return (
		<div className="container">
			<div className="image">
				<MediaUpload
					onSelect={(media) => setAttributes({ imgUrl: media.url })}
					type="image"
					value={attributes.imgUrl}
					render={({ open }) => (
						<img
							src={attributes.imgUrl}
							alt="Image Description"
							onClick={open}
						/>
					)}
				/>
			</div>
			<div className="content">
				<TextControl
					value={attributes.title}
					onChange={(title) => setAttributes({ title })}
					className="title"
				/>

				<TextControl
					value={attributes.subtitle}
					onChange={(subtitle) => setAttributes({ subtitle })}
					className="sub_title"
				/>

				<TextControl
					value={attributes.paragraph}
					onChange={(paragraph) => setAttributes({ paragraph })}
					className="paragraph"
				/>
			</div>
		</div>
	);
}
