import "./Header.css";
import image from "../assets/human.jpg";
import TypewriterComponent from "typewriter-effect";

function Header() {
  return (
    <div className="header">
      {/* Text */}
      <div className="header_text">
        <div className="header_text_title">
          <h1>Daftar & Ikuti Lomba</h1>
          <TypewriterComponent
            options={{
              strings: ["Panjat Pinang", "Balap Karung", "Makan Kerupuk", "Tarik Tambang"],
              autoStart: true,
              loop: true,
            }}
          />
          <h1>dan jadilah juara</h1>
        </div>
        <div className="header_text_description">
          <p>Mari sama-sama kita rayakan & meriahkan Hari Kemerdekaan kita dengan mengikuti berbagai lomba 17 agustus!</p>
        </div>
        <div className="header_text_button">
          <button>Daftar Sekarang!</button>
        </div>
      </div>

      {/* Image */}
      <div className="header_image">
        <img src={image} />
      </div>
    </div>
  );
}

export default Header;