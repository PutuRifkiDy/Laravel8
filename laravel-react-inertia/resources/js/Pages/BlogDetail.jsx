import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const Blog = ({ heading, blog }) => {
    return(
        <EndUserLayout>
            <Head title={blog.title}/>
            {/* double page */}
            <div className="px-24 py-24 flex flex-col justify-center items-center">
                <div className="flex flex-col justify-center items-center">
                    <h1>{blog.title}</h1>
                    <h4>{blog.description}</h4>
                </div>
            </div>
        </EndUserLayout>
    );
}

export default Blog;