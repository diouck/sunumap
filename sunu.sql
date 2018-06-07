PGDMP     +                    v           sunumap    10.1    10.1 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    64497    sunumap    DATABASE     �   CREATE DATABASE sunumap WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'French_France.1252' LC_CTYPE = 'French_France.1252';
    DROP DATABASE sunumap;
             postgres    false                        2615    64498    geoauran    SCHEMA        CREATE SCHEMA geoauran;
    DROP SCHEMA geoauran;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    13                        2615    18371    tiger    SCHEMA        CREATE SCHEMA tiger;
    DROP SCHEMA tiger;
             postgres    false                        2615    18641 
   tiger_data    SCHEMA        CREATE SCHEMA tiger_data;
    DROP SCHEMA tiger_data;
             postgres    false                        2615    18089    topology    SCHEMA        CREATE SCHEMA topology;
    DROP SCHEMA topology;
             postgres    false            �           0    0    SCHEMA topology    COMMENT     9   COMMENT ON SCHEMA topology IS 'PostGIS Topology schema';
                  postgres    false    19                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1                        3079    18231    address_standardizer 	   EXTENSION     H   CREATE EXTENSION IF NOT EXISTS address_standardizer WITH SCHEMA public;
 %   DROP EXTENSION address_standardizer;
                  false    13            �           0    0    EXTENSION address_standardizer    COMMENT     �   COMMENT ON EXTENSION address_standardizer IS 'Used to parse an address into constituent elements. Generally used to support geocoding address normalization step.';
                       false    7                        3079    18360    fuzzystrmatch 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS fuzzystrmatch WITH SCHEMA public;
    DROP EXTENSION fuzzystrmatch;
                  false    13            �           0    0    EXTENSION fuzzystrmatch    COMMENT     ]   COMMENT ON EXTENSION fuzzystrmatch IS 'determine similarities and distance between strings';
                       false    2                        3079    18356    ogr_fdw 	   EXTENSION     ;   CREATE EXTENSION IF NOT EXISTS ogr_fdw WITH SCHEMA public;
    DROP EXTENSION ogr_fdw;
                  false    13            �           0    0    EXTENSION ogr_fdw    COMMENT     L   COMMENT ON EXTENSION ogr_fdw IS 'foreign-data wrapper for GIS data access';
                       false    3            	            3079    16394    postgis 	   EXTENSION     ;   CREATE EXTENSION IF NOT EXISTS postgis WITH SCHEMA public;
    DROP EXTENSION postgis;
                  false    13            �           0    0    EXTENSION postgis    COMMENT     g   COMMENT ON EXTENSION postgis IS 'PostGIS geometry, geography, and raster spatial types and functions';
                       false    9                        3079    17893 	   pgrouting 	   EXTENSION     =   CREATE EXTENSION IF NOT EXISTS pgrouting WITH SCHEMA public;
    DROP EXTENSION pgrouting;
                  false    13    9            �           0    0    EXTENSION pgrouting    COMMENT     9   COMMENT ON EXTENSION pgrouting IS 'pgRouting Extension';
                       false    8                        3079    18256 
   pointcloud 	   EXTENSION     >   CREATE EXTENSION IF NOT EXISTS pointcloud WITH SCHEMA public;
    DROP EXTENSION pointcloud;
                  false    13            �           0    0    EXTENSION pointcloud    COMMENT     G   COMMENT ON EXTENSION pointcloud IS 'data type for lidar point clouds';
                       false    5                        3079    18346    pointcloud_postgis 	   EXTENSION     F   CREATE EXTENSION IF NOT EXISTS pointcloud_postgis WITH SCHEMA public;
 #   DROP EXTENSION pointcloud_postgis;
                  false    9    13    5            �           0    0    EXTENSION pointcloud_postgis    COMMENT     n   COMMENT ON EXTENSION pointcloud_postgis IS 'integration for pointcloud LIDAR data and PostGIS geometry data';
                       false    4                        3079    18238    postgis_sfcgal 	   EXTENSION     B   CREATE EXTENSION IF NOT EXISTS postgis_sfcgal WITH SCHEMA public;
    DROP EXTENSION postgis_sfcgal;
                  false    9    13            �           0    0    EXTENSION postgis_sfcgal    COMMENT     C   COMMENT ON EXTENSION postgis_sfcgal IS 'PostGIS SFCGAL functions';
                       false    6                        3079    18372    postgis_tiger_geocoder 	   EXTENSION     I   CREATE EXTENSION IF NOT EXISTS postgis_tiger_geocoder WITH SCHEMA tiger;
 '   DROP EXTENSION postgis_tiger_geocoder;
                  false    9    2    20            �           0    0     EXTENSION postgis_tiger_geocoder    COMMENT     ^   COMMENT ON EXTENSION postgis_tiger_geocoder IS 'PostGIS tiger geocoder and reverse geocoder';
                       false    11            
            3079    18090    postgis_topology 	   EXTENSION     F   CREATE EXTENSION IF NOT EXISTS postgis_topology WITH SCHEMA topology;
 !   DROP EXTENSION postgis_topology;
                  false    19    9            �           0    0    EXTENSION postgis_topology    COMMENT     Y   COMMENT ON EXTENSION postgis_topology IS 'PostGIS topology spatial types and functions';
                       false    10                        1259    64516    abouts    TABLE     o  CREATE TABLE abouts (
    id integer NOT NULL,
    titre character varying(255),
    description character varying(255),
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying(255),
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.abouts;
       geoauran         postgres    false    14                       1259    64514    abouts_id_seq    SEQUENCE     ~   CREATE SEQUENCE abouts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE geoauran.abouts_id_seq;
       geoauran       postgres    false    288    14            �           0    0    abouts_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE abouts_id_seq OWNED BY abouts.id;
            geoauran       postgres    false    287            "           1259    64528    applications    TABLE     k  CREATE TABLE applications (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
 "   DROP TABLE geoauran.applications;
       geoauran         postgres    false    14            !           1259    64526    applications_id_seq    SEQUENCE     �   CREATE SEQUENCE applications_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE geoauran.applications_id_seq;
       geoauran       postgres    false    14    290            �           0    0    applications_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE applications_id_seq OWNED BY applications.id;
            geoauran       postgres    false    289            $           1259    64540    cartes    TABLE     #  CREATE TABLE cartes (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.cartes;
       geoauran         postgres    false    14            #           1259    64538    cartes_id_seq    SEQUENCE     ~   CREATE SEQUENCE cartes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE geoauran.cartes_id_seq;
       geoauran       postgres    false    292    14            �           0    0    cartes_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE cartes_id_seq OWNED BY cartes.id;
            geoauran       postgres    false    291            &           1259    64552    docs    TABLE     c  CREATE TABLE docs (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.docs;
       geoauran         postgres    false    14            %           1259    64550    docs_id_seq    SEQUENCE     |   CREATE SEQUENCE docs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE geoauran.docs_id_seq;
       geoauran       postgres    false    294    14            �           0    0    docs_id_seq    SEQUENCE OWNED BY     -   ALTER SEQUENCE docs_id_seq OWNED BY docs.id;
            geoauran       postgres    false    293            (           1259    64564    faqs    TABLE     c  CREATE TABLE faqs (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.faqs;
       geoauran         postgres    false    14            '           1259    64562    faqs_id_seq    SEQUENCE     |   CREATE SEQUENCE faqs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE geoauran.faqs_id_seq;
       geoauran       postgres    false    14    296            �           0    0    faqs_id_seq    SEQUENCE OWNED BY     -   ALTER SEQUENCE faqs_id_seq OWNED BY faqs.id;
            geoauran       postgres    false    295            1           1259    64621    infos    TABLE     d  CREATE TABLE infos (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.infos;
       geoauran         postgres    false    14            0           1259    64619    infos_id_seq    SEQUENCE     }   CREATE SEQUENCE infos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE geoauran.infos_id_seq;
       geoauran       postgres    false    14    305            �           0    0    infos_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE infos_id_seq OWNED BY infos.id;
            geoauran       postgres    false    304            3           1259    64635 
   migrations    TABLE     �   CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
     DROP TABLE geoauran.migrations;
       geoauran         postgres    false    14            2           1259    64633    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE geoauran.migrations_id_seq;
       geoauran       postgres    false    14    307            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;
            geoauran       postgres    false    306            -           1259    64600    password_resets    TABLE     �   CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    update_at timestamp without time zone DEFAULT now()
);
 %   DROP TABLE geoauran.password_resets;
       geoauran         postgres    false    14            /           1259    64609    qliks    TABLE     d  CREATE TABLE qliks (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.qliks;
       geoauran         postgres    false    14            .           1259    64607    qliks_id_seq    SEQUENCE     }   CREATE SEQUENCE qliks_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE geoauran.qliks_id_seq;
       geoauran       postgres    false    14    303            �           0    0    qliks_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE qliks_id_seq OWNED BY qliks.id;
            geoauran       postgres    false    302            ,           1259    64590 	   tutoriels    TABLE     h  CREATE TABLE tutoriels (
    id integer NOT NULL,
    titre character varying(255),
    description character varying,
    tag character varying(255),
    categorie character varying(255),
    "user" character varying(255),
    img1 character varying(255),
    img2 character varying(255),
    img3 character varying(255),
    client character varying(255),
    compagnie character varying(255),
    url character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    publication character varying,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.tutoriels;
       geoauran         postgres    false    14            +           1259    64588    tutoriels_id_seq    SEQUENCE     �   CREATE SEQUENCE tutoriels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE geoauran.tutoriels_id_seq;
       geoauran       postgres    false    14    300            �           0    0    tutoriels_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE tutoriels_id_seq OWNED BY tutoriels.id;
            geoauran       postgres    false    299            *           1259    64576    users    TABLE     u  CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    update_at timestamp without time zone DEFAULT now()
);
    DROP TABLE geoauran.users;
       geoauran         postgres    false    14            )           1259    64574    users_id_seq    SEQUENCE     }   CREATE SEQUENCE users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE geoauran.users_id_seq;
       geoauran       postgres    false    14    298            �           0    0    users_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE users_id_seq OWNED BY users.id;
            geoauran       postgres    false    297            :           1259    64689 
   categories    TABLE     �   CREATE TABLE categories (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    title character varying(255) NOT NULL,
    slug character varying(255) NOT NULL
);
    DROP TABLE public.categories;
       public         postgres    false    13            9           1259    64687    categories_id_seq    SEQUENCE     �   CREATE SEQUENCE categories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.categories_id_seq;
       public       postgres    false    314    13            �           0    0    categories_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE categories_id_seq OWNED BY categories.id;
            public       postgres    false    313            I           1259    64780    category_post    TABLE     �   CREATE TABLE category_post (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    category_id integer NOT NULL,
    post_id integer NOT NULL
);
 !   DROP TABLE public.category_post;
       public         postgres    false    13            H           1259    64778    category_post_id_seq    SEQUENCE     �   CREATE SEQUENCE category_post_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.category_post_id_seq;
       public       postgres    false    329    13            �           0    0    category_post_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE category_post_id_seq OWNED BY category_post.id;
            public       postgres    false    328            >           1259    64718    comments    TABLE     1  CREATE TABLE comments (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    user_id integer NOT NULL,
    post_id integer NOT NULL,
    parent_id integer,
    lft integer,
    rgt integer,
    depth integer,
    body text NOT NULL
);
    DROP TABLE public.comments;
       public         postgres    false    13            =           1259    64716    comments_id_seq    SEQUENCE     �   CREATE SEQUENCE comments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.comments_id_seq;
       public       postgres    false    318    13            �           0    0    comments_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE comments_id_seq OWNED BY comments.id;
            public       postgres    false    317            @           1259    64732    contacts    TABLE       CREATE TABLE contacts (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    message text NOT NULL
);
    DROP TABLE public.contacts;
       public         postgres    false    13            ?           1259    64730    contacts_id_seq    SEQUENCE     �   CREATE SEQUENCE contacts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.contacts_id_seq;
       public       postgres    false    320    13            �           0    0    contacts_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE contacts_id_seq OWNED BY contacts.id;
            public       postgres    false    319            B           1259    64743    ingoings    TABLE     �   CREATE TABLE ingoings (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    ingoing_id integer NOT NULL,
    ingoing_type character varying(255) NOT NULL
);
    DROP TABLE public.ingoings;
       public         postgres    false    13            A           1259    64741    ingoings_id_seq    SEQUENCE     �   CREATE SEQUENCE ingoings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.ingoings_id_seq;
       public       postgres    false    322    13            �           0    0    ingoings_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE ingoings_id_seq OWNED BY ingoings.id;
            public       postgres    false    321            5           1259    64646 
   migrations    TABLE     �   CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    13            4           1259    64644    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    309    13            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;
            public       postgres    false    308            C           1259    64751    notifications    TABLE     l  CREATE TABLE notifications (
    id character varying(255) NOT NULL,
    type character varying(255) NOT NULL,
    notifiable_id integer NOT NULL,
    notifiable_type character varying(255) NOT NULL,
    data text NOT NULL,
    read_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.notifications;
       public         postgres    false    13            6           1259    64652    password_resets    TABLE     �   CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    13            E           1259    64762    post_tag    TABLE     �   CREATE TABLE post_tag (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    post_id integer NOT NULL,
    tag_id integer NOT NULL
);
    DROP TABLE public.post_tag;
       public         postgres    false    13            D           1259    64760    post_tag_id_seq    SEQUENCE     �   CREATE SEQUENCE post_tag_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.post_tag_id_seq;
       public       postgres    false    13    325            �           0    0    post_tag_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE post_tag_id_seq OWNED BY post_tag.id;
            public       postgres    false    324            <           1259    64704    posts    TABLE     �  CREATE TABLE posts (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    title character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    seo_title character varying(255),
    excerpt text NOT NULL,
    body text NOT NULL,
    meta_description text NOT NULL,
    meta_keywords text NOT NULL,
    active boolean DEFAULT false NOT NULL,
    user_id integer NOT NULL,
    image character varying(255)
);
    DROP TABLE public.posts;
       public         postgres    false    13            ;           1259    64702    posts_id_seq    SEQUENCE     }   CREATE SEQUENCE posts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.posts_id_seq;
       public       postgres    false    316    13            �           0    0    posts_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE posts_id_seq OWNED BY posts.id;
            public       postgres    false    315            G           1259    64770    tags    TABLE     �   CREATE TABLE tags (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    tag character varying(50) NOT NULL
);
    DROP TABLE public.tags;
       public         postgres    false    13            F           1259    64768    tags_id_seq    SEQUENCE     |   CREATE SEQUENCE tags_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.tags_id_seq;
       public       postgres    false    327    13            �           0    0    tags_id_seq    SEQUENCE OWNED BY     -   ALTER SEQUENCE tags_id_seq OWNED BY tags.id;
            public       postgres    false    326            8           1259    64662    users    TABLE     �  CREATE TABLE users (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    role character varying(255) NOT NULL,
    valid boolean DEFAULT false NOT NULL,
    confirmed boolean DEFAULT false NOT NULL,
    confirmation_code character varying(255),
    CONSTRAINT users_role_check CHECK (((role)::text = ANY ((ARRAY['user'::character varying, 'redac'::character varying, 'admin'::character varying])::text[])))
);
    DROP TABLE public.users;
       public         postgres    false    13            7           1259    64660    users_id_seq    SEQUENCE     }   CREATE SEQUENCE users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    13    312            �           0    0    users_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE users_id_seq OWNED BY users.id;
            public       postgres    false    311            t           2604    64519 	   abouts id    DEFAULT     X   ALTER TABLE ONLY abouts ALTER COLUMN id SET DEFAULT nextval('abouts_id_seq'::regclass);
 :   ALTER TABLE geoauran.abouts ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    287    288    288            v           2604    64531    applications id    DEFAULT     d   ALTER TABLE ONLY applications ALTER COLUMN id SET DEFAULT nextval('applications_id_seq'::regclass);
 @   ALTER TABLE geoauran.applications ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    289    290    290            x           2604    64543 	   cartes id    DEFAULT     X   ALTER TABLE ONLY cartes ALTER COLUMN id SET DEFAULT nextval('cartes_id_seq'::regclass);
 :   ALTER TABLE geoauran.cartes ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    292    291    292            z           2604    64555    docs id    DEFAULT     T   ALTER TABLE ONLY docs ALTER COLUMN id SET DEFAULT nextval('docs_id_seq'::regclass);
 8   ALTER TABLE geoauran.docs ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    294    293    294            |           2604    64567    faqs id    DEFAULT     T   ALTER TABLE ONLY faqs ALTER COLUMN id SET DEFAULT nextval('faqs_id_seq'::regclass);
 8   ALTER TABLE geoauran.faqs ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    295    296    296            �           2604    64624    infos id    DEFAULT     V   ALTER TABLE ONLY infos ALTER COLUMN id SET DEFAULT nextval('infos_id_seq'::regclass);
 9   ALTER TABLE geoauran.infos ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    305    304    305            �           2604    64638    migrations id    DEFAULT     `   ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);
 >   ALTER TABLE geoauran.migrations ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    306    307    307            �           2604    64612    qliks id    DEFAULT     V   ALTER TABLE ONLY qliks ALTER COLUMN id SET DEFAULT nextval('qliks_id_seq'::regclass);
 9   ALTER TABLE geoauran.qliks ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    303    302    303            �           2604    64593    tutoriels id    DEFAULT     ^   ALTER TABLE ONLY tutoriels ALTER COLUMN id SET DEFAULT nextval('tutoriels_id_seq'::regclass);
 =   ALTER TABLE geoauran.tutoriels ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    299    300    300            ~           2604    64579    users id    DEFAULT     V   ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
 9   ALTER TABLE geoauran.users ALTER COLUMN id DROP DEFAULT;
       geoauran       postgres    false    298    297    298            �           2604    64692    categories id    DEFAULT     `   ALTER TABLE ONLY categories ALTER COLUMN id SET DEFAULT nextval('categories_id_seq'::regclass);
 <   ALTER TABLE public.categories ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    313    314    314            �           2604    64783    category_post id    DEFAULT     f   ALTER TABLE ONLY category_post ALTER COLUMN id SET DEFAULT nextval('category_post_id_seq'::regclass);
 ?   ALTER TABLE public.category_post ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    328    329    329            �           2604    64721    comments id    DEFAULT     \   ALTER TABLE ONLY comments ALTER COLUMN id SET DEFAULT nextval('comments_id_seq'::regclass);
 :   ALTER TABLE public.comments ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    317    318    318            �           2604    64735    contacts id    DEFAULT     \   ALTER TABLE ONLY contacts ALTER COLUMN id SET DEFAULT nextval('contacts_id_seq'::regclass);
 :   ALTER TABLE public.contacts ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    320    319    320            �           2604    64746    ingoings id    DEFAULT     \   ALTER TABLE ONLY ingoings ALTER COLUMN id SET DEFAULT nextval('ingoings_id_seq'::regclass);
 :   ALTER TABLE public.ingoings ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    321    322    322            �           2604    64649    migrations id    DEFAULT     `   ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    308    309    309            �           2604    64765    post_tag id    DEFAULT     \   ALTER TABLE ONLY post_tag ALTER COLUMN id SET DEFAULT nextval('post_tag_id_seq'::regclass);
 :   ALTER TABLE public.post_tag ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    324    325    325            �           2604    64707    posts id    DEFAULT     V   ALTER TABLE ONLY posts ALTER COLUMN id SET DEFAULT nextval('posts_id_seq'::regclass);
 7   ALTER TABLE public.posts ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    315    316    316            �           2604    64773    tags id    DEFAULT     T   ALTER TABLE ONLY tags ALTER COLUMN id SET DEFAULT nextval('tags_id_seq'::regclass);
 6   ALTER TABLE public.tags ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    326    327    327            �           2604    64665    users id    DEFAULT     V   ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    312    311    312            _          0    64516    abouts 
   TABLE DATA               �   COPY abouts (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    288   �       a          0    64528    applications 
   TABLE DATA               �   COPY applications (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    290   (�       c          0    64540    cartes 
   TABLE DATA               �   COPY cartes (id, titre, description, tag, categorie, "user", img1, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    292   E�       e          0    64552    docs 
   TABLE DATA               �   COPY docs (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    294   b�       g          0    64564    faqs 
   TABLE DATA               �   COPY faqs (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    296   �       p          0    64621    infos 
   TABLE DATA               �   COPY infos (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    305   ��       r          0    64635 
   migrations 
   TABLE DATA               3   COPY migrations (id, migration, batch) FROM stdin;
    geoauran       postgres    false    307   ��       l          0    64600    password_resets 
   TABLE DATA               G   COPY password_resets (email, token, created_at, update_at) FROM stdin;
    geoauran       postgres    false    301   ��       n          0    64609    qliks 
   TABLE DATA               �   COPY qliks (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    303   ��       k          0    64590 	   tutoriels 
   TABLE DATA               �   COPY tutoriels (id, titre, description, tag, categorie, "user", img1, img2, img3, client, compagnie, url, created_at, updated_at, publication, update_at) FROM stdin;
    geoauran       postgres    false    300   �       i          0    64576    users 
   TABLE DATA               f   COPY users (id, name, email, password, remember_token, created_at, updated_at, update_at) FROM stdin;
    geoauran       postgres    false    298   -�       y          0    64689 
   categories 
   TABLE DATA               F   COPY categories (id, created_at, updated_at, title, slug) FROM stdin;
    public       postgres    false    314   J�       �          0    64780    category_post 
   TABLE DATA               R   COPY category_post (id, created_at, updated_at, category_id, post_id) FROM stdin;
    public       postgres    false    329   ;�       }          0    64718    comments 
   TABLE DATA               k   COPY comments (id, created_at, updated_at, user_id, post_id, parent_id, lft, rgt, depth, body) FROM stdin;
    public       postgres    false    318   ��                 0    64732    contacts 
   TABLE DATA               M   COPY contacts (id, created_at, updated_at, name, email, message) FROM stdin;
    public       postgres    false    320   ��       �          0    64743    ingoings 
   TABLE DATA               Q   COPY ingoings (id, created_at, updated_at, ingoing_id, ingoing_type) FROM stdin;
    public       postgres    false    322   1�       t          0    64646 
   migrations 
   TABLE DATA               3   COPY migrations (id, migration, batch) FROM stdin;
    public       postgres    false    309   ��       �          0    64751    notifications 
   TABLE DATA               q   COPY notifications (id, type, notifiable_id, notifiable_type, data, read_at, created_at, updated_at) FROM stdin;
    public       postgres    false    323   ��       u          0    64652    password_resets 
   TABLE DATA               <   COPY password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    310   ^�       )          0    18258    pointcloud_formats 
   TABLE DATA               9   COPY pointcloud_formats (pcid, srid, schema) FROM stdin;
    public       postgres    false    235   ��       �          0    64762    post_tag 
   TABLE DATA               H   COPY post_tag (id, created_at, updated_at, post_id, tag_id) FROM stdin;
    public       postgres    false    325   ��       {          0    64704    posts 
   TABLE DATA               �   COPY posts (id, created_at, updated_at, title, slug, seo_title, excerpt, body, meta_description, meta_keywords, active, user_id, image) FROM stdin;
    public       postgres    false    316   C�       *          0    16694    spatial_ref_sys 
   TABLE DATA               Q   COPY spatial_ref_sys (srid, auth_name, auth_srid, srtext, proj4text) FROM stdin;
    public       postgres    false    211   �      �          0    64770    tags 
   TABLE DATA               8   COPY tags (id, created_at, updated_at, tag) FROM stdin;
    public       postgres    false    327   �      w          0    64662    users 
   TABLE DATA               �   COPY users (id, created_at, updated_at, name, email, password, remember_token, role, valid, confirmed, confirmation_code) FROM stdin;
    public       postgres    false    312   �      -          0    18378    geocode_settings 
   TABLE DATA               N   COPY geocode_settings (name, setting, unit, category, short_desc) FROM stdin;
    tiger       postgres    false    238   �      .          0    18733    pagc_gaz 
   TABLE DATA               E   COPY pagc_gaz (id, seq, word, stdword, token, is_custom) FROM stdin;
    tiger       postgres    false    282   �      /          0    18745    pagc_lex 
   TABLE DATA               E   COPY pagc_lex (id, seq, word, stdword, token, is_custom) FROM stdin;
    tiger       postgres    false    284   �      0          0    18757 
   pagc_rules 
   TABLE DATA               2   COPY pagc_rules (id, rule, is_custom) FROM stdin;
    tiger       postgres    false    286         +          0    18093    topology 
   TABLE DATA               >   COPY topology (id, name, srid, "precision", hasz) FROM stdin;
    topology       postgres    false    229   "      ,          0    18106    layer 
   TABLE DATA               w   COPY layer (topology_id, layer_id, schema_name, table_name, feature_column, feature_type, level, child_id) FROM stdin;
    topology       postgres    false    230   ?      �           0    0    abouts_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('abouts_id_seq', 1, false);
            geoauran       postgres    false    287            �           0    0    applications_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('applications_id_seq', 1, false);
            geoauran       postgres    false    289            �           0    0    cartes_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('cartes_id_seq', 1, false);
            geoauran       postgres    false    291            �           0    0    docs_id_seq    SEQUENCE SET     3   SELECT pg_catalog.setval('docs_id_seq', 1, false);
            geoauran       postgres    false    293            �           0    0    faqs_id_seq    SEQUENCE SET     3   SELECT pg_catalog.setval('faqs_id_seq', 1, false);
            geoauran       postgres    false    295            �           0    0    infos_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('infos_id_seq', 1, false);
            geoauran       postgres    false    304            �           0    0    migrations_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('migrations_id_seq', 1, false);
            geoauran       postgres    false    306            �           0    0    qliks_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('qliks_id_seq', 1, false);
            geoauran       postgres    false    302            �           0    0    tutoriels_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('tutoriels_id_seq', 1, false);
            geoauran       postgres    false    299            �           0    0    users_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('users_id_seq', 1, false);
            geoauran       postgres    false    297            �           0    0    categories_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('categories_id_seq', 7, true);
            public       postgres    false    313            �           0    0    category_post_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('category_post_id_seq', 14, true);
            public       postgres    false    328            �           0    0    comments_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('comments_id_seq', 1, true);
            public       postgres    false    317            �           0    0    contacts_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('contacts_id_seq', 7, true);
            public       postgres    false    319            �           0    0    ingoings_id_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('ingoings_id_seq', 44, true);
            public       postgres    false    321            �           0    0    migrations_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('migrations_id_seq', 13, true);
            public       postgres    false    308            �           0    0    post_tag_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('post_tag_id_seq', 9, true);
            public       postgres    false    324            �           0    0    posts_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('posts_id_seq', 14, true);
            public       postgres    false    315            �           0    0    tags_id_seq    SEQUENCE SET     3   SELECT pg_catalog.setval('tags_id_seq', 15, true);
            public       postgres    false    326            �           0    0    users_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('users_id_seq', 26, true);
            public       postgres    false    311            �           2606    64525    abouts about_pkey 
   CONSTRAINT     H   ALTER TABLE ONLY abouts
    ADD CONSTRAINT about_pkey PRIMARY KEY (id);
 =   ALTER TABLE ONLY geoauran.abouts DROP CONSTRAINT about_pkey;
       geoauran         postgres    false    288            �           2606    64537    applications application_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY applications
    ADD CONSTRAINT application_pkey PRIMARY KEY (id);
 I   ALTER TABLE ONLY geoauran.applications DROP CONSTRAINT application_pkey;
       geoauran         postgres    false    290            �           2606    64549    cartes cartes_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY cartes
    ADD CONSTRAINT cartes_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY geoauran.cartes DROP CONSTRAINT cartes_pkey;
       geoauran         postgres    false    292            �           2606    64561    docs doc_pkey 
   CONSTRAINT     D   ALTER TABLE ONLY docs
    ADD CONSTRAINT doc_pkey PRIMARY KEY (id);
 9   ALTER TABLE ONLY geoauran.docs DROP CONSTRAINT doc_pkey;
       geoauran         postgres    false    294            �           2606    64573    faqs faq_pkey 
   CONSTRAINT     D   ALTER TABLE ONLY faqs
    ADD CONSTRAINT faq_pkey PRIMARY KEY (id);
 9   ALTER TABLE ONLY geoauran.faqs DROP CONSTRAINT faq_pkey;
       geoauran         postgres    false    296            �           2606    64630    infos info_pkey 
   CONSTRAINT     F   ALTER TABLE ONLY infos
    ADD CONSTRAINT info_pkey PRIMARY KEY (id);
 ;   ALTER TABLE ONLY geoauran.infos DROP CONSTRAINT info_pkey;
       geoauran         postgres    false    305            �           2606    64640    migrations migrations_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY geoauran.migrations DROP CONSTRAINT migrations_pkey;
       geoauran         postgres    false    307            �           2606    64618    qliks qlik_pkey 
   CONSTRAINT     F   ALTER TABLE ONLY qliks
    ADD CONSTRAINT qlik_pkey PRIMARY KEY (id);
 ;   ALTER TABLE ONLY geoauran.qliks DROP CONSTRAINT qlik_pkey;
       geoauran         postgres    false    303            �           2606    64599    tutoriels tutoriel_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY tutoriels
    ADD CONSTRAINT tutoriel_pkey PRIMARY KEY (id);
 C   ALTER TABLE ONLY geoauran.tutoriels DROP CONSTRAINT tutoriel_pkey;
       geoauran         postgres    false    300            �           2606    64587    users users_email_unique 
   CONSTRAINT     M   ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 D   ALTER TABLE ONLY geoauran.users DROP CONSTRAINT users_email_unique;
       geoauran         postgres    false    298            �           2606    64585    users users_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY geoauran.users DROP CONSTRAINT users_pkey;
       geoauran         postgres    false    298            �           2606    64697    categories categories_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_pkey;
       public         postgres    false    314            �           2606    64701 !   categories categories_slug_unique 
   CONSTRAINT     U   ALTER TABLE ONLY categories
    ADD CONSTRAINT categories_slug_unique UNIQUE (slug);
 K   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_slug_unique;
       public         postgres    false    314            �           2606    64699 "   categories categories_title_unique 
   CONSTRAINT     W   ALTER TABLE ONLY categories
    ADD CONSTRAINT categories_title_unique UNIQUE (title);
 L   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_title_unique;
       public         postgres    false    314            �           2606    64785     category_post category_post_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY category_post
    ADD CONSTRAINT category_post_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.category_post DROP CONSTRAINT category_post_pkey;
       public         postgres    false    329            �           2606    64726    comments comments_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.comments DROP CONSTRAINT comments_pkey;
       public         postgres    false    318            �           2606    64740    contacts contacts_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY contacts
    ADD CONSTRAINT contacts_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.contacts DROP CONSTRAINT contacts_pkey;
       public         postgres    false    320            �           2606    64748    ingoings ingoings_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY ingoings
    ADD CONSTRAINT ingoings_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.ingoings DROP CONSTRAINT ingoings_pkey;
       public         postgres    false    322            �           2606    64651    migrations migrations_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    309            �           2606    64759     notifications notifications_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY notifications
    ADD CONSTRAINT notifications_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.notifications DROP CONSTRAINT notifications_pkey;
       public         postgres    false    323            �           2606    64767    post_tag post_tag_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY post_tag
    ADD CONSTRAINT post_tag_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.post_tag DROP CONSTRAINT post_tag_pkey;
       public         postgres    false    325            �           2606    64713    posts posts_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.posts DROP CONSTRAINT posts_pkey;
       public         postgres    false    316            �           2606    64715    posts posts_slug_unique 
   CONSTRAINT     K   ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_slug_unique UNIQUE (slug);
 A   ALTER TABLE ONLY public.posts DROP CONSTRAINT posts_slug_unique;
       public         postgres    false    316            �           2606    64775    tags tags_pkey 
   CONSTRAINT     E   ALTER TABLE ONLY tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.tags DROP CONSTRAINT tags_pkey;
       public         postgres    false    327            �           2606    64777    tags tags_tag_unique 
   CONSTRAINT     G   ALTER TABLE ONLY tags
    ADD CONSTRAINT tags_tag_unique UNIQUE (tag);
 >   ALTER TABLE ONLY public.tags DROP CONSTRAINT tags_tag_unique;
       public         postgres    false    327            �           2606    64676    users users_email_unique 
   CONSTRAINT     M   ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    312            �           2606    64674    users users_name_unique 
   CONSTRAINT     K   ALTER TABLE ONLY users
    ADD CONSTRAINT users_name_unique UNIQUE (name);
 A   ALTER TABLE ONLY public.users DROP CONSTRAINT users_name_unique;
       public         postgres    false    312            �           2606    64672    users users_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    312            �           1259    64728    comments_lft_index    INDEX     ?   CREATE INDEX comments_lft_index ON comments USING btree (lft);
 &   DROP INDEX public.comments_lft_index;
       public         postgres    false    318            �           1259    64727    comments_parent_id_index    INDEX     K   CREATE INDEX comments_parent_id_index ON comments USING btree (parent_id);
 ,   DROP INDEX public.comments_parent_id_index;
       public         postgres    false    318            �           1259    64729    comments_rgt_index    INDEX     ?   CREATE INDEX comments_rgt_index ON comments USING btree (rgt);
 &   DROP INDEX public.comments_rgt_index;
       public         postgres    false    318            �           1259    64749    ingoings_ingoing_id_index    INDEX     M   CREATE INDEX ingoings_ingoing_id_index ON ingoings USING btree (ingoing_id);
 -   DROP INDEX public.ingoings_ingoing_id_index;
       public         postgres    false    322            �           1259    64750    ingoings_ingoing_type_index    INDEX     Q   CREATE INDEX ingoings_ingoing_type_index ON ingoings USING btree (ingoing_type);
 /   DROP INDEX public.ingoings_ingoing_type_index;
       public         postgres    false    322            �           1259    64757 1   notifications_notifiable_id_notifiable_type_index    INDEX     ~   CREATE INDEX notifications_notifiable_id_notifiable_type_index ON notifications USING btree (notifiable_id, notifiable_type);
 E   DROP INDEX public.notifications_notifiable_id_notifiable_type_index;
       public         postgres    false    323    323            �           1259    64658    password_resets_email_index    INDEX     Q   CREATE INDEX password_resets_email_index ON password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    310            �           1259    64659    password_resets_token_index    INDEX     Q   CREATE INDEX password_resets_token_index ON password_resets USING btree (token);
 /   DROP INDEX public.password_resets_token_index;
       public         postgres    false    310            �           2606    64811 /   category_post category_post_category_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY category_post
    ADD CONSTRAINT category_post_category_id_foreign FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.category_post DROP CONSTRAINT category_post_category_id_foreign;
       public       postgres    false    329    314    5047            �           2606    64816 +   category_post category_post_post_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY category_post
    ADD CONSTRAINT category_post_post_id_foreign FOREIGN KEY (post_id) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE;
 U   ALTER TABLE ONLY public.category_post DROP CONSTRAINT category_post_post_id_foreign;
       public       postgres    false    316    5053    329            �           2606    64806 !   comments comments_post_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_post_id_foreign FOREIGN KEY (post_id) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.comments DROP CONSTRAINT comments_post_id_foreign;
       public       postgres    false    316    5053    318            �           2606    64801 !   comments comments_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_user_id_foreign FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
 K   ALTER TABLE ONLY public.comments DROP CONSTRAINT comments_user_id_foreign;
       public       postgres    false    5045    312    318            �           2606    64791 !   post_tag post_tag_post_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY post_tag
    ADD CONSTRAINT post_tag_post_id_foreign FOREIGN KEY (post_id) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.post_tag DROP CONSTRAINT post_tag_post_id_foreign;
       public       postgres    false    325    5053    316            �           2606    64796     post_tag post_tag_tag_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY post_tag
    ADD CONSTRAINT post_tag_tag_id_foreign FOREIGN KEY (tag_id) REFERENCES tags(id) ON UPDATE CASCADE ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.post_tag DROP CONSTRAINT post_tag_tag_id_foreign;
       public       postgres    false    325    327    5073            �           2606    64786    posts posts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_user_id_foreign FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE RESTRICT ON DELETE RESTRICT;
 E   ALTER TABLE ONLY public.posts DROP CONSTRAINT posts_user_id_foreign;
       public       postgres    false    316    5045    312            _      x������ � �      a      x������ � �      c      x������ � �      e      x������ � �      g      x������ � �      p      x������ � �      r      x������ � �      l      x������ � �      n      x������ � �      k      x������ � �      i      x������ � �      y   �   x�m�Mj�0��3�Ъ;I�I�]	$J	��l�21Y2�z(���qc������	�OPBn������Zպ��������it�x��4�&��!ږ'rt�D�"3��b�0t�R��	UVV샏d]�?݇�����u�큛G���JYd�[߻[+2����4�����߂�b��̲S3$�(B�X?�Ufuf��ƒ��ք��Y3Y·��,;�!]���5�����      �   P   x�E��� Dѳ�����D*��:�H��|x�2�ʾ�����r �#�21�+݅l�2˅��,���� <��      }      x������ � �         i  x���Ao�6��ү����-��&��u7�6(�l�l�����$Lq��W���H�Y�顀-Q5~��,����r���/�iy�:�X�]�8�ox�4�ʾ3!��;_����F>�w�Yu��z+]����fT)אf
ZYK�qe�N<S�ʑ3��e���N�T=ha&k��=�*�e��Hkk�<#Dť�XwT&��h;`��
��Hj#C�x����y�"�1b�m�d$i��ʥ`3:�����Հ~�2���ްw*�n��46��FF�Ot��J|'�%��H��x+����ws���t�7�z�f��s�@�� h\��m�l�5}�-BT.Q3m�/Ύ��>bD���M�&\?GV�������81�L�ʨB]�y5��*F��^���c���v���frqi��h Iz��fE��]�VvU���<&��#Ǻ��/�� fJ4u�i2��a�9���"�4��\��a>��'L��Qۤp�Di�������<r�b�LL��_]��%s(��]�[�19)����t��w�d��x�QǷ�ZM���A��e\8���	j������A�4�09$�3+���>=y۷~6	�H�m6�Q��L���W�X;�6l���l����ō5��O\���<`QSq��~�|n��,�!��0P���&!��;���n�(�Ӓ(s���p����GeH^%vd�^A�.�q��4fx]�|�LR��� /w��*I7 �0uy�-�7��j'NzD�P��(_.�)���$����S���B�Oݠ��=z��4�J��]�B4m[��߽v�n\EP�Oú����/h�\-���������o?���hp��~�NKDK�G��)��˲�\:�      �   v  x����j�0���S�\Ю~,��iҹ	����8���rc�G��j�o�7f�-����2��A-�^��ax�~��y>��a:5�:���^M��&�Ƌ��	���N�;�{=��|@<�B5���#�=җ�P�H_?B�c}���Q�Й���Ǩ?���t[��èA�4P�p�k$��	���z�B#�xݢ�F�R#A���4/FX��ˎ��p�V�6@�!|�S&��r�ڡH��x+	N��O�jm�Kkx/X��Q���f����(����a�:�w�J6�j	�IZ9�z�z�V�9v���|��Jo����?l��$�jrV����M�+����w��篚���T/���{�}����_x1���G?�      t   �   x�}�Ѫ�0�k�0Ҥ��wBO���k��|����A-4W����� s]��&1�L��
9EJ���;hp�I!) ��E�C��@��N���Gf�����'����l.�ǥiW�7��1[��ͬ�3��=~�>����u~������Kr���G(P�Ĳ^�S�P�٭�b�'����as�ǫ�3��	x'F	�&O~�L���i� �
��      �   �   x�mͱ�0��<��5mR،�,ƭ�z�&�b[&��(��������PI)�E	]'$���쇚d?�J�.���h��:�q�)�&���F��s@O�4�h�6�db��uC�q�x�I�O�w>�y�v�%L�UÏ���U/��b4m�����%�
X��p���ej�e�.�J�      u   h   x�KL���s�I�K+�T1�T14P	��2�u���45�75�+��KKq�pr�K�6tO�I66�2.ts�t�)Ы
�420��50"Cc+Cs+CC�=... �p^      )      x������ � �      �   @   x�5��	�0��]1&gINԄ+p�u����1���Hz}@�� q�|���k�̖C�3H^lTC      {      x��\�rIr>s��b�Ra�O#�h(Y��ЦDA͆#t)4
@�6�[U�5�}���yٗ���lf�u��ر>�htWeee}��O����×������G/���̯}w|�����m���ջ�ۋ�>���\�.D���ԉ���\��O���?��`����Y�k����I��Z�\�*��z�y�
�x���7K���<�K1bU�i��U��u�YW1^��|Q���Z6�p��l%aQ�5<�)�b]k6����^葽������s��j%�V	�b��,�a#�z�_�J��W���K���f �j������M��J��W����Z���Z���7OЈ��Zq#|U7���7��
�C5� �J���1������\�W %N
+���kt#����F�fQ�PJ��TB���]~
^J��`�_D��U:�QZYj�Vn~5��_aWP�*��,�*^��F� -�a�R��f{x�Z\��q���W�7cv}3��¹�z���]Mu�*�ؕ�s���oν	�u�Zeh�Axq'5.G����%,$��>%asG��a�0�;4*�U��ư�5�M]�����V\kܽ��H���QPS^I�����G���3��cɶ��,e��Y.�Eպ�`HZ*�`KiE�+8�����qO�q.����I-�@`BEf_�8P>��q�l���`��P���Gѽ~�^�E��X���z�Wጵv	@���J�>�����b/_T@���`���:6xا\-6�+��&z3Ёm/� ������(릱(�1���g&ݧV^!R��l���ظ����34S-�0�1U�~=2R��J��G?�"���
zT;�iJYp��D��O��mF���P۽��	���SvНU�	���TV��5��l�Ξ����C�XA�J���c�Ș�^�6�QxPQ�^�L��  �� 
���oЀ"Jp/φ�9��'c�jíC⭒�ZV=��tr�R���q;"a��+^~A;r�=z�tܧXpa��:���q.���;��Ǐr�8�a�f��Q��^�;�vzrs{u~sr���x�વ6+�_.�b�W�z�lȌ�w��Z$�J�h�N��7��K�������D%�V
���"�dl�����4X�����R�
� �D��*Zf}'�Ve�3�H�;��;�
�Iݡ����0z�%#D��5~ت�,,�HJ{�w�,8�Bx���T�B�Am���xx �Q�F�V�+�rNE��!�-O\e$�0�t�\���uR�0�s��u��b;'/����}�N���eK7G�a�.#�aA�Md�����U���'�N	�����C��;F6f��4g������y�d�����Jw"��ygr;S[�Îc�r4
>�e������+R�����frB���x����WV�	�����(���E��G�����f�%�F6�%�=���@`��@HcL����>;;��=����	9L��y�^~�5���;U_/' �`e88�,G��	G������LE;S'[��8xխz�+!���Ѻ$ !�#��w�262w`�wPU],�R�������c��PZ���Ǡ��������>�����z����hYC�ùs�Z>w<?}�l�Dr�;�Q���8`�9��fF;7�Y�A}o�q���&���i��h����	��i��E4<�� [=#q�X��.`�(��F��� ?�tY����oDj�8T:�@���͛�S����@�.�	;���������=�q�K���oD�A����v L��o �`;�6c�Z�a&i�K�"%*��ߐ�J`���e�WD,��w-s�F�=�G$�CȠYe�9��t�gWmt���Cx��(��9�I��b���.4fh �B\>Z�gJ�������{t`�(v�	7����3_�@{��/�u~ee�c�Ro��N�jɨ�Xbp	�t�΂���b�)6��V���~��D'�{�/� ��/8��'
�l�+ō|
ޏ��k<�=��`�2#��WkX�TC�ߪ��� ʰ4N��ܚL��Q��ϛ%&O`���v��j��NZ�6�J�~�"e�	��KL���x_o�i9|O�v�bqDX��?]A�m~&q`�����$�|~|pp��h����O.&}��oƗ������N�!o���U��b7�8�!��\�~���p�	n7�H����m�=��Ysm���za\��S�0���^�a�cޕ'd��p�s�"��҅�~T�^�vc��3���)�LSU�g��v県�������U��cd��/��1�E��d�6&7��B���JVt�`p�U��iz���Z�n<	�7��&}���V|�(�L��(��J���%���!���;���qO&�w �ŲXB�Vn�V�U�A���S�X!	�-(T�����fO��,�O��SnjSĞ���T��¾��L�B��=�#�<֊�RM5���T���#Q�$iՙb����4Z��|� ����ۖ�(�Ê&� � 1f��`�M��Q8ٰ��tU!^�"�����+�T��/�:��n
}��)>�A�0��Nr��&�r#�)���)/���ۙMmS.�������ƭR�ߏ�#����l �G��7)z"Q<��E*M�10�[H�z�8��0��[��2�J�����	Sw4�C��P�}-�o:)�٤K��;Sa������������v�oWn�cv}_.!D9�����Ó67���fک�Np�j@�zJt|ZSj�M�*��I�mߤ?l��\����ԫ3��;��!e�s���g��0+eyiΦH��7dѕ����**�D)q/�k)J�=Nؾ��������k'ﮀ��o?��Q�SY���-��wEہw]�m�����P%��]�I"���-і���/��Q#�ۑ�t�P�7���"z������Ԗ(l�E1 o���V�Jh0�;��W�$�U�V������;Wۜ�i�-��8�9���HOoݰF?C?O���)�[��"Z���]B���"2�bf��Bq�q�`ܥE�q�~��p	��A&��n�
\뺐�°\��C��`$���@�Ϣ2�!�V�|n�ߚbTP5�LIx���,��L�������`>;>�EH�--%eŒ�E�~�@xN7�8��=s�yb$F�#�F�%5��[��4jsL��X�~Q�2I�WXQ9�E���osY=��y(+�u�����v��h�y���صM{�hm�UͰl]����LԢ�:204u;J��镀��k 7Eȣ�����d�oI+�'�8ٲ�r|>�5i�n`��ز��P.�x�n�=wTtY�*���2v^W���	t�a��t9�b�;�k����t<��BS�=�&�f<��y�����2��G?����n�t~1������si�#�RlWĈ�M�A@�\�Ӥ|\�#ʁ�B��R�n
��zi1Q�M�fH�b�[b�;�(;�K��&)�TOˇ{G�W�����-S�����}l>�P!�]��B ̭%>ar)OXu����ڝ���˞b�[L;w�^b'n�ӫ
>MS�{-���� �s{���[)]g:XP���7�mҲ �h�%�*� ��	�e��B�܅Z���q;b�VF�=2���N�(L�:S�XV"&8��Hԙ�QCS:n���������Fq_�hoo���?��B6u�L�j�kgK%����e�6�x����{x��`���j�W��k�С�g�窬�loٮ�߽�8�x��ߌl�W ~5�&�[�=�Q�|tޥGW���
��{�L���="�y�z���((����[>���֔��_��p��;� k+H�Gm۽�q ����0�^Y�m���p����h7S7��O ���.���8�JNmnC
��$�ӄZe\� 8������m����!St`�njJ(�C {�Kߡ ΞRw�	�*�Ģ����K�輯A���bԞW�^@��-��6���ܰ�Т��_Ҡ�c=��H�Km�� 7  ,T�p� �%I�wp�$
�����XS�A�����@�R�p]Me�H偅��d��tB�x��6_�(f�M�fT�m=!-"*C��է�$Fh�xбԸ�n��A��g`�Mg�QĤ5�r��b:VqJ8@W`�IX����@JM����O�7�X��9XdC��>����̫�;�)�q��L�]k���Χ�Ͷ:OJ�X:h�o3�;S��=��A�^������v��DP���K�G�ӓ+)�؞T�?�8���������C�C��,v�\"=�	�5��R�p�������{����b�.�Iq#��0/��_��>˸���̽(#"�&H�"�3�m����2S�+m�c�$k�C)��ҳ���Ÿ;�������G(�@|��N�.a�����s iј��.Ms� �7��'aP��}�gcy�ac8,(v�_������/�]�����-l���p�1�:�z�~<�l�~m	ow%�'L)R���[�������l]���������er´9&T1�9�����}س�(�6����`�-�5��P��u_�m>���?T[�fхq������,׌zRu�jfo�1oCp��ʳD<��
�*m�F��77&&�Y�Аbv��u��Q��X���#s��^2#�L\�J��ڟ��=�|h��'���i6a�=sdLK�To�K���*̍�4���A{�Ѥ��H���T(���?��LJ�1�蓩��������b��v)f�t�L��#bb�5�P.�kO��7A/��$Y�+�������V6PC&d��ɉc������ޒ*n�Xd4V����X�8����4�����ФܯG�ɬ�D�_ 	��	�C����|ܡ
5F�Q�����ar`c0�)0�CnZ�b�3��C��Ł>ϝ�Ǉy��������Ǔ���UGH���[w�M�y��Â�W�}MDԜ�U
CAlz�tR{����woKS n���e�Cv`Q���3S{�}����V��|��K\�ȳ� ����]ʡ\�e?/4��Ab|imA��9i�'<?�(��T�*�.�--F��u�1Ӵ��ô����v)|��|6S�8�wL1iB�<",3�(�Qů�h���7�|�[kM�J��,j�?�g��M����lQh��&a�Xcf,�2��1�mK�7O�v��f��¥7�L�	��G��6@�J�M�8ngy�;} K�E�uuX��!Pa�K5�Gm�lz��F��:>[�Z�*�}�^j�5�%�P�Q�"���_`IWO=7�AJ���1_(�?}v^d���㣼�\;	��f��lEo��f?}�����p&2��?�#7k�2�����g���'��՘0.�U0��P�*�$ξ�Lq7��64 *o��A�� #�Ջ~�	�^3ݧ��)�މO_�r�0+�W!�;���_� Ҋ�zg6`�����B����\�=���>�[�nU9�w��U��	C.�\%2Wc��V���a݂�%GF}������}�=::���Vx����뛫��d�aZ���Ϳ����[3�^fz"���V����'��{`#���;X�S�����o�S{p|��c��GǇ/����o�?m��h�'����S_���&��z�WO�Tb)��7�)Ê���dV�1(��b�p�/H��"�'Cݽy��=�ś	�͒���I�t����̾��|�ɨ���'lmҲ��Ծ� e
-
k���iq����Gi��ܫ���`�\�!f�j8,ӎzx�ב=j�J|����x�o�'�4�Y0��\W%�G�u;�5�M`�o��-��m}���o����F      *      x������ � �      �   �   x�m��n�0E�ܯ�Py�vHf(j��D��$��[���T,��l�9����:78��A��``c�(b(����r����/T�V�u��ه�ejY�Ͳ>P�;&�F8�ڏ7�JU)\f�څ�Dr:���,������i㤅Xl���V��jA:��Pz��V˦{_n�d�V��YVo���7x��Z�"�~��ō��:`�
��wp�      w     x���YϪH��9�s�(3�U3(�L��a(���T���{��tb�1����^{�U��"�?V�+fA0��$=�� �6H¸o��~�U�x������X�<�����JjD�g�;0�������̾���]�]�[O;�6B�T������������� ����������yiF��r��:=x���,���GQ�XG�R=y��A�c�A)����l覝�G4���5�
�/����Δ1�����6\����ؘ� U#����-�Y�!3<�-+�k�Ļ�'֖ߘ�ϫԠ_U�uy'�`�_��ǹ��i'.x�2Z6���T�kf�s�m�}��@_�n��yT�Y�L�F�D�7;����I����]��:��P���_��m�e�m�0�a�m
���L��޿Z&)�x߰�j�zK���yj�M2���̇��1�b�>f��(����Z�*��#^���R�M����P��ֲ&mH�F�4>�jߔ=�Ƣp.(�7��W�j�g[�����S|�$�1�،��mP{���H3��A������a����$%�ej���� �Q��{;��e!l��E�������&�eN���V���t�uRw\�yUM:/TS�*<DU3'u�=8d��t	�u�+X����ѭLU�+V��:~:�8Y�G�g1b��V���A��ǜ���'>��A~u$y|��#����k��VvAF�BM;��!^8	^$�W���I}X�zU�/b���]�	N�j�A�B��/�cE��y���z`������ލD��d��$w���LtT�(�e8#��a��'����Ll��,Tn�|~Ӟ ?�;|q�n��<�(��`�_�Kq^�w������)��E-`�/qX�rY#Z�y���Tp��
��I
}O�=� �ϥ�����c.��Z�j��q��='��p��u��%�֪�S�� �	�x��ū��!�7�}�i�>�q��#\m���?7��!e�L�'oA��L�'!�p�������R��P����
�\�������;��`��;7��K/aJ������Ի��2gS��b��B��YM������&c� FS7�ItcmD9�4G&y_F��\Z�3���Z�X<�p�{�T�lʣ[�*����߸��H2�6" v,�@C4'|��7��;��öh\9Lw&�Z+4Gq��bt�ͣ����D���]F�})����_.��P���]�xC��z��U�񡺋�k[���GS�m2E��H�����QE��S��}D��4Ť�t���Pc��M5M��C�G���fv��D2�^�FT��Fcq`e���HGn������MvG�C��4���k�e�w���d�A�՚���x����C�ssU{kݸ�+����YΙN+�����{6�#������N���-����f���盍�σI��R�aҁq��_��4�ˡ�'+U��y>I�V�nE�z��Q����َ"����y�[���jH�1�ytkg�ȹd�ks��}�Q�tX�u�~��K]�a������*��~�'C�]-˳\�o�iz�m����T"<�1r6^H��꽊sI4�O���&���M:ݼ�);z%>�[���-�<��t� �#"��ܪ��\��k�۵��1V�S3��ڶƹS32{����^%$u�����Ȫ+��N���64S�g�`@w�	��V%�"��4ZT^�qn�6�Kf�ϵ�4��ƕ�}A�p�$�V���h�B��[�K�vivU�����w������m�      -      x������ � �      .      x������ � �      /      x������ � �      0      x������ � �      +      x������ � �      ,      x������ � �     