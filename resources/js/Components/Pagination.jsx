import { Link } from "@inertiajs/react";

export default function Pagination({ links }) {
  return (
    <nav className="text-center mt-4">
      {links.map((link, index) => (
        <Link
          key={index} // Unique key for each Link
          href={link.url} // URL for pagination link
          className={link.active ? 'text-blue-500 font-bold' : 'text-gray-500'} // Styling for active links
          dangerouslySetInnerHTML={{ __html: link.label }} // Render HTML entities in label
        />
      ))}
    </nav>
  );
}



