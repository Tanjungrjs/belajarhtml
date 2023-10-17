import './Navbar.css'
import logo from "../assets/garuda.png"

function Navbar() {
  return (
    <div className='navbar'>
      <div className='navbar_icon'>
        <img src={logo} />
      </div>
      <div className='navbar_list'>
        <p>Beranda</p>
        <p>Tentang</p>
        <p>Lomba</p>
        <p>Hubungi</p>
      </div>
    </div>
  )
}

export default Navbar