import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const Blog = ({ title }) => {
    return(
        <EndUserLayout>
            <div>
                <Head title={title}/>
                <h1>Ini adalah tampilan Blog</h1>
            </div>
        </EndUserLayout>
    );
}

export default Blog;