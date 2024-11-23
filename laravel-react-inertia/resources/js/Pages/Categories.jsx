import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import EndUserLayout from "@/Layouts/EndUserLayout";

const Blog = ({ heading, description, posts, title }) => {
    return(
        <EndUserLayout>
            <div className="flex justify-center items-center">
                <Head title={heading}/>
                <div className="px-24 py-24 flex flex-col justify-center">
                    {
                        posts.map((post, index) => ( 
                            <div className="mb-8" key={index}>
                                <h1>Kategori : {title}</h1>
                                <a href={`categories/${post.slug}`}>
                                    <h1 className="text-blue-700">{post.name}</h1>
                                </a>
                                <p>{post.excerpt}</p>
                            </div>
                        ))
                    }
 
                </div>
            </div>

            {/* double page */}
            {/* <div className="px-24 flex flex-col justify-center items-center">
                <div className="flex flex-col justify-center items-center">
                    <h1>{blog.heading}</h1>
                    <h4>{blog.description}</h4>
                </div>
            </div> */}
        </EndUserLayout>
    );
}

export default Blog;