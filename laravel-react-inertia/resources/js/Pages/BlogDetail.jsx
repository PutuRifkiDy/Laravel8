import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const Blog = ({ heading, blog }) => {
    console.log(blog.category?.name);
    return(
        <EndUserLayout>
            <Head title={blog.title}/>
            {/* double page */}
            <div className="px-24 py-24 flex flex-col justify-center items-center">
                <div className="flex flex-col justify-center items-center">
                    <h1>{blog.title}</h1>
                    <p>Putu Rifki Dirkayuda <a href={`/categories/${blog.category?.slug}`}>{blog.category?.name}</a> </p>
                    <h4 dangerouslySetInnerHTML={{__html: blog.body}} className="flex flex-col gap-5" />
                </div>
            </div>
        </EndUserLayout>
    );
}

export default Blog;