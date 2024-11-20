import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const About = ({ title }) => {
    return(
        <EndUserLayout>
            <div>
                <Head title={title}/>
                <h1>Ini adalah tampilan About</h1>
            </div>
        </EndUserLayout>
    );
}

export default About;