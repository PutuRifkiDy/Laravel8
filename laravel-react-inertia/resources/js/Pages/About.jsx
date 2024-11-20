import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const About = ({ title, nama, gambar }) => {
    return(
        <EndUserLayout>
            <div className="flex flex-col justify-center items-center">
                <Head title={title}/>
                <h1 className="text-[36px] font-bold text">Ini adalah tampilan About</h1>
                <p>halo ini {nama}</p>
                <img src={gambar} alt="" width={300} height={300}/>
            </div>
        </EndUserLayout>
    );
}

export default About;